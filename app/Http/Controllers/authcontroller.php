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
   		 
        $factory = JWTFactory::addClaims([
            'sub' => env('API_ID'),
        ]);

        $payload = $factory->make();

        $token = JWTAuth::encode($payload);

			  return response()->json(['success'=> true , 'token' => "{$token}"]);

   		}

   		else return response()->json(['success'=> false]);


   	}

}
