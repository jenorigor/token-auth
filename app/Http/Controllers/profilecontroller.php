<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use JWTFactory;
use JWTAuth;
use Illuminate\Support\Facades\Auth;

class profilecontroller extends Controller
{
    //
    public function getprofile(Request $request){
    	
    	try {
	        // attempt to verify the credentials and create a token for the user
	        $token = JWTAuth::getToken();
	        $apy = JWTAuth::getPayload($token)->toArray();

	        if($apy['username'] != 'admin') {
	        	return response()->json(['success'=> false]);
	        }

	        else {
	        	return response()->json(['username' => $apy['username'],'success'=> true , 'profilestring' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum ']);
	        }

	    } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

	        return response()->json(['success'=> false]);

	    } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

	        return response()->json(['success'=> false]);

	    } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {

	        return response()->json(['success'=> false]);

	    }

    }
}
