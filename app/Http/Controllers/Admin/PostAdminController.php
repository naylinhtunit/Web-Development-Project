<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use DB;

class PostAdminController extends Controller
{
    
    public function post()
    {
        $posts = Post::latest()->paginate(10);
        
        return view('admin.post.index')
            ->with('posts', $posts)
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    // search
    public function post_search(Request $request)
    {
        $search = $request->get('search');
        $posts = DB::table('posts')->where('title', 'like', '%'.$search.'%')->get();

        return view('admin.post.index')
        ->with('posts', $posts);
    }
    
     public function post_create()
    {
        return view('admin.post.create');
    }

    public function post_store(Request $request)
    {
        $request->validate([
            'title'     =>  'required',
            'detail'     =>  'required',
            'image'         =>  'required|image|max:2048'
        ]);
        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img/blog/post'), $new_name);
        $form_data = array(
            'title'        =>   $request->title,
            'detail'        =>   $request->detail,
            'image'            =>   $new_name
        );

        Post::create($form_data);

        return redirect('panel/post')->with('success', 'Data Added successfully.');
    }
    
    public function post_edit($id)
    {
        $posts = Post::findOrFail($id);
        return view('admin.post.edit', compact('posts'));
    }
    
    public function post_update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'title'    =>  'required',
                'detail'     =>  'required',
                'image'         =>  'image|max:2048'
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img/blog/post'), $image_name);
        }
        else
        {
            $request->validate([
                'title'    =>  'required',
                'detail'     =>  'required'
            ]);
        }

        $form_data = array(
            'title'    =>  $request->title,
            'detail'     =>  $request->detail,
            'image'         =>  $image_name
        );

        Post::whereId($id)->update($form_data);
        return redirect('/panel/post')->with('success', 'Data is successfully updated');
    }
    
    public function post_destroy($id)
    {
        $posts = Post::findOrFail($id);
        $posts->delete();
        return redirect('/panel/post')->with('success', 'Data is successfully deleted');
    }
}
