<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Web;

class WebAdminController extends Controller
{
    
    public function index()
    {
        $webs = Web::latest()->paginate(10);
        
        return view('admin.web.index')
            ->with('webs', $webs)
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
    
    public function web_create()
    {
        return view('admin.web.create');
    }
    
    public function web_store(Request $request)
    {
        $request->validate([
            'url'     =>  'required',
            'image'         =>  'required|image|max:2048'
        ]);
        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img/demo/web'), $new_name);
        $form_data = array(
            'url'        =>   $request->url,
            'image'            =>   $new_name
        );

        Web::create($form_data);

        return redirect('admin/web')->with('success', 'Data Added successfully.');
    }
    
    public function web_edit($id)
    {
        $webs = Web::findOrFail($id);
        return view('admin.web.edit', compact('webs'));
    }
    
    public function web_update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'url'     =>  'required',
                'image'         =>  'image|max:2048'
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img/demo/web'), $image_name);
        }
        else
        {
            $request->validate([
                'url'     =>  'required',
                'price'     =>  'required'
            ]);
        }

        $form_data = array(
            'url'     =>  $request->url,
            'image'         =>  $image_name
        );

        Web::whereId($id)->update($form_data);
        return redirect('/admin/web')->with('success', 'Data is successfully updated');
    }
    
    public function web_destroy($id)
    {
        $webs = Web::findOrFail($id);
        $webs->delete();
        return redirect('/admin/web')->with('success', 'Data is successfully deleted');
    }
}
