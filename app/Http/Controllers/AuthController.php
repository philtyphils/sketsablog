<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\ApiKeyModel;

class AuthController extends Controller
{
    public function getToken (Request $request)
	{
		$post 		= $request->input();
		$validator 	= Validator::make($post, ['_token' => 'required','apikey' => 'required']);
		
		if($validator->fails())
		{
		
			$response = array(
				"status" => 405,
				"msg"	=>  $validator->messages()
			);
			
			return response()->json($response);
		}
		
		$data = ApiKeyModel::where("key",$post['apikey'])->first();
		if($data && $data->count() > 0)
		{
			$salt 			= md5("d-M-Y H:i:s");
			$generate_token = md5("sulistyo;philtyphils;08118779995".$salt).":".$salt;
			$update			= ApiKeyModel::where("updated_at",'<',date("Y-m-d H:i:s"))->where("id",$data->id)->update(array(
				"token"			=> $generate_token,
				"updated_at"	=> date("Y-m-d H:i:s")
			));
			
			$response = array(
				"status" => 200,
				"msg"   => "successfull",
				"data"  => array(
					"token" 	=> $generate_token,
					"expired" 	=> date("Y-m-d H:i:s",strtotime("+3 hours"))
				)
			);
			return response()->json($response,$response['status']);
		}
		else
		{
			$response = array(
				"status" 	=> 406,
				"msg" 		=> "Request Not Acceptable.",
				"data"		=> array()
			);
			
			return response()->json($response,$response['status']);
		}	
	}
}
