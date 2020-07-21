<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;
use DB;
use App\Models\Post;
use App\Models\Demo;
use Helper;
use Carbon\Carbon;
use Analytics;
use Spatie\Analytics\Period;

class UserController extends Controller
{

    public function index()
    {
        $logos = DB::table('logos')->get();
        
        $webs = DB::table('webs')->get();
        
        $last_post = Post::orderBy('created_at', 'desc')->take(4)->get();
       
        return view('index')
        ->with('last_post', $last_post)
        ->with('logos', $logos)
        ->with('webs', $webs)
        ;
    }
    
    // Profile
    public function profile()
    {
        return view('admin.profile', array('user' => Auth::user()));
    }
    
    // avatar update
    public function update_avatar(Request $request)
    {
        
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(500, 500)->save( public_path('/uploads/avatars/' . $filename) );
            
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        
        return view('admin.profile', array('user' => Auth::user()));

    }
    
    // Blog
    public function news()
    {
        
        $posts = Post::latest()->paginate(4);
        
        $last_post = Post::orderBy('created_at', 'desc')->get();
        $last_theme = Demo::orderBy('created_at', 'desc')->get();
        
        $analytics = Analytics::fetchMostVisitedPages(
            Period::create(Carbon::now()->subMonth(), Carbon::now())
        );
        
        return view('news.index')
            ->with('posts', $posts)
            ->with('last_post', $last_post)
            ->with('last_theme', $last_theme)
            ->with('analytics', $analytics)
            ->with('i', (request()->input('page', 1) - 1) * 4);
    }
    
    public function news_show($id)
    {
        $posts = Post::findOrFail($id);
        
        return view('news.show')
            ->with('posts', $posts);
    }

    // search
    // public function user_search(Request $request)
    // {
    //     $search = $request->input('search');
    //     $posts = DB::table('posts')->where('title', 'like', '%'.$search.'%')->get();
        
    //     if(count($posts) > 0)
    //     {
    //         return view('blog')->withDetails($posts)->withQuery($search)->with('posts', $posts);
    //     }
    //     else
    //     { 
    //         return view ('blog')->with('posts', $posts)->withMessage('No Details found. Try to search again !');
    //     }
    // }
}
