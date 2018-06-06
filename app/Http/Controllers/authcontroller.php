<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use JWTFactory;
use JWTAuth;
use Illuminate\Support\Facades\Auth;

class authcontroller extends Controller
{
    //
   	public function login(Request $request){
   		
   		$credentials = $request->only('username', 'password');

   		if($credentials['username'] == 'admin' && $credentials['password'] == 'admin') {
   			
			return response()->json(['success'=> true]);

   		}

   		else return response()->json(['success'=> false]);



   	}

}
