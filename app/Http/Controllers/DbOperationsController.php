<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DbOperationsController extends Controller
{
    //

    public function recordExists($tableName,$checkColumn,$checkValue)
    {
    	try {
    		$exists_flag=$tableName::where($checkColumn,$checkValue)->exists();
    	}
    	catch (\Exception $e)
    	{
    		return 
    	}
    }
}
