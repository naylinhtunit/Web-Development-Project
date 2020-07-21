<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Logo;
use DB;

class LogoAdminController extends Controller
{
    public function index()
    {
        $logos = Logo::latest()->paginate(10);
        
        return view('admin.logo.index')
            ->with('logos', $logos)
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
    

// Logo Demo
    public function logo_create()
    {
        return view('admin.logo.create');
    }

    public function logo_store(Request $request)
    {
        $request->validate([
            'name'    =>  'required',
            'price'     =>  'required',
            'image'         =>  'required|image|max:2048'
        ]);
        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img/demo/logo'), $new_name);
        $form_data = array(
            'name'       =>   $request->name,
            'price'        =>   $request->price,
            'image'            =>   $new_name
        );

        Logo::create($form_data);

        return redirect('admin/logo')->with('success', 'Data Added successfully.');
    }
    
    public function logo_edit($id)
    {
        $logos = Logo::findOrFail($id);
        return view('admin.logo.edit', compact('logos'));
    }
    
    public function logo_update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'name'    =>  'required',
                'price'     =>  'required',
                'image'         =>  'image|max:2048'
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img/demo/logo'), $image_name);
        }
        else
        {
            $request->validate([
                'name'    =>  'required',
                'price'     =>  'required'
            ]);
        }

        $form_data = array(
            'name'    =>  $request->name,
            'price'     =>  $request->price,
            'image'         =>  $image_name
        );

        Logo::whereId($id)->update($form_data);
        return redirect('/admin/logo')->with('success', 'Data is successfully updated');
    }
    
    public function logo_destroy($id)
    {
        $logos = Logo::findOrFail($id);
        $logos->delete();
        return redirect('/admin/logo')->with('success', 'Data is successfully deleted');
    }
}
