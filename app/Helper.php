<?php
namespace App;

use Request;
use DB;
use Session;

class Helper {

	public static function transchange(){

		$locals = DB::table('languages')->orderby('name', 'asc')->get();

		echo '<form method="GET" class="lang" action="'.Request::url().'">';
		echo '<select class="selectpicker countrypicker" data-flag="true" name="lang" onchange="this.form.submit()">';
		
		foreach($locals as $local){
			if(Helper::lang() == $local->code){
				echo '<option class="en" value="'.$local->code.'" selected>'.$local->name.'</option>';
			}else{
				echo '<option class="mm" value="'.$local->code.'">'.$local->name.'</option>';
			}
	 	}

		echo '</select>';
		echo '</form>';
	}

	public static function lang()
	{

		if($langs = Request::input('lang')){

			Session::forget('lang');
			Session::put('lang', $langs);
			return $langs;

		}else{

			if (Session::has('lang')){
				$lang = Session::get('lang');
				return $lang;

			}else if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])){

				$langs = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
				$languages = explode(',', $langs);
				$languages = array_reverse($languages);

				foreach ($languages as $language) {
					if (preg_match('/^en/i', $language)) {
						$lang = 'en';
					} elseif (preg_match('/^mm/i', $language)) {
						$lang = 'mm';
					} else{
						$lang = 'en';
					}
				}

				return $lang;

			}else{
				$lang = 'en';
				return $lang;
			}
		}
	}
}