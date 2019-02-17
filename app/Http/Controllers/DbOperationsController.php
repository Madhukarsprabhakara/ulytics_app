<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user_transaction_details;
use App\url_id_mapping;
class DbOperationsController extends Controller
{
    //

    
    protected function calculateParent()
    {
    	$all=url_id_mapping::all();
    	foreach ($all as $mapping)
    	{
    		$url_array=  parse_url($mapping->web_url);
    		$hashed_url=md5($url_array['host']);

    		$exists=url_id_mapping::where('tab_hash_id',$hashed_url)->exists();
				//insert url and has md5 mapping in url_id_mapping table
				if (!$exists)
				{
					$url_id_mapping_object = new url_id_mapping;
					$url_id_mapping_object->tab_hash_id = $hashed_url;
					$url_id_mapping_object->web_url=$url_array['host'];
					$url_id_mapping_object->save();
				}

    		 

    	}

    }
    protected function calculatePforTransac()
    {
    		$all=user_transaction_details::all();
    		foreach ($all as $mapping)
    		{
    			$web_url=url_id_mapping::where('tab_hash_id',$mapping->tab_hash_id)->first();
    			//return $mapping->tab_hash_id;
    		$url_array=  parse_url($web_url->web_url);
    		// return $url_array;
    		$hashed_url=md5($url_array['host']);
    		// return $hashed_url;
    		user_transaction_details::where('tab_hash_id',$mapping->tab_hash_id)->update(['parent_tab_hash_id' => $hashed_url]);
				//insert url and has md5 mapping in url_id_mapping table
			
					
			

    		 

    		}
    }
}
