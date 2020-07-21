<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use DB;
use Helper;

class ContactController extends Controller
{
    
    public function contact()
    {
	    $contacts_categorys = DB::table('contacts_categorys')
	    ->where('target', 'contact')
	    ->get();

  	    return view('contact', compact('contacts_categorys'));

    }


    public function contact_store(Request $request)
    {
		$rules = [
		  'name' => 'required|max:255',
		  'email' => 'required|string|email|max:255',
		  'tel' => 'required|min:11|numeric',
		  'contacts_categorys_id' => 'required',
		  'message' => 'required|min:6',
          'g-recaptcha-response' => 'required|captcha',  // reCAPTCHA evaluation
		];

        $this->validate($request, $rules);

		$name = $request["name"];
		$email= $request["email"];
		$tel= $request["tel"];
		$contacts_categorys_id = $request["contacts_categorys_id"];
		$message = $request["message"];
        

		DB::table('contacts')->insert([
			'name' => $name,
			'email' => $email,
			'tel' => $tel,
			'contacts_categorys_id' => $contacts_categorys_id,
			'message' => $message,
		]);

		$id = DB::getPdo()->lastInsertId();

		$contacts_categorys = DB::table('contacts_categorys')
		->where('id', $contacts_categorys_id)
		->first();
		
        $data = array(
        	'name'	=>	$request->name,
        	'email'	=>	$request->email,
        	'tel'	=>	$request->tel,
        	'contacts_categorys_id'	=>	$request->contacts_categorys_id,
        	'message'	=>	$request->message
        );
        
        //mail
        $from = env("MAIL_FROM_ADDRESS");
        Mail::to($from)->send(new SendMail($data));
        
        return redirect('/contact')->with('success', 'Thanks for contacting us!');
    }
    
    // Client Data Store
    public function client()
    {
        $datas = DB::table('contacts')->get();
        
        return view('admin.clients.index')
            ->with('datas', $datas);
    }
    
}
