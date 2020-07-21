<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Demo;
use DB;

class WpThemeAdminController extends Controller
{
    
    public function demo()
    {
        $demos = Demo::latest()->paginate(10);
        
        return view('admin.demo.index')
            ->with('demos', $demos)
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    // search
    public function demo_search(Request $request)
    {
        $search = $request->get('search');
        $demos = DB::table('demos')->where('title', 'like', '%'.$search.'%')->get();

        return view('admin.demo.index')
        ->with('demos', $demos);
    }
    
     public function demo_create()
    {
        return view('admin.demo.create');
    }

    public function demo_store(Request $request)
    {
        $request->validate([
            'title'     =>  'required',
            'note'     =>  'required',
            'image'         =>  'required|image|max:2048'
        ]);
        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img/blog/demo'), $new_name);
        $form_data = array(
            'title'        =>   $request->title,
            'note'        =>   $request->note,
            'image'            =>   $new_name
        );

        Demo::create($form_data);

        return redirect('admin/demo')->with('success', 'Data Added successfully.');
    }
    
    public function demo_edit($id)
    {
        $demos = Demo::findOrFail($id);
        return view('admin.demo.edit', compact('demos'));
    }
    
    public function demo_update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'title'    =>  'required',
                'note'     =>  'required',
                'image'         =>  'image|max:2048'
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img/blog/demo'), $image_name);
        }
        else
        {
            $request->validate([
                'title'    =>  'required',
                'note'     =>  'required'
            ]);
        }

        $form_data = array(
            'title'    =>  $request->title,
            'note'     =>  $request->note,
            'image'         =>  $image_name
        );

        Demo::whereId($id)->update($form_data);
        return redirect('/admin/demo')->with('success', 'Data is successfully updated');
    }
    
    public function demo_destroy($id)
    {
        $demos = Demo::findOrFail($id);
        $demos->delete();
        return redirect('/admin/demo')->with('success', 'Data is successfully deleted');
    }
}
