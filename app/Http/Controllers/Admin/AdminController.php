<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Web;
use App\Models\Logo;
use App\Models\Post;

class AdminController extends Controller
{
    public function __construct()
    {
        // $this->middleware('verified');
    }
    
    public function index()
    {
        $logos = Logo::latest()->paginate(10);
        $webs = Web::all();
        $posts = Post::latest()->paginate(10);
        
        return view('admin.index')
            ->with('logos', $logos)
            ->with('webs', $webs)
            ->with('posts', $posts)
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
}
