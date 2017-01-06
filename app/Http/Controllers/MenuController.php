<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Http\Requests;
use DB;

class MenuController extends Controller
{
    public function menu(Request $request)
	{
		$menu 	= Menu::with('ParentMenu','FirstChildMenu','SecondChildMenu')->take(5)->get();
		$socmed = array(
			"facebook" => "https://www.facebook.com/philtygrin",
			"twitter" =>  "https://twitter.com/philtyphils",
			"pinrest"	=> "https://id.pinterest.com/philtyphil/" 
		);
		
		$_out = array(
			"status" => 200,
			"menu" => $menu,
			"socmed" => $socmed
		);
		
		return response()->json($_out,$_out['status']);
	}
}
