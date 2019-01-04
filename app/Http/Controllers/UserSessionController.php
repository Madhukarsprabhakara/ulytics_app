<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserSessionController extends Controller
{
    //
    public function loginCheck()
    {
    	//return date("Y-m-d h:i:sa");
    	if (\Auth::check())
    	{
    		$csrf_token=csrf_token();
    		return response()->json(['status' => '1', 'csrf_token' => $csrf_token]);
    	}
    	else
    	{
    		return response()->json(['status' => '0']);
    	}
    }
}
