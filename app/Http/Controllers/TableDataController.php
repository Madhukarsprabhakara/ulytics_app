<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\url_id_mapping;
use App\user_transaction_deatils;
use App\url_productivity_classification;
use Carbon\Carbon;
class TableDataController extends Controller
{
    //
    protected function getAllUrlsGroupedByParentForTheDay()
    {
    	//get parent and child 
    	//Get today's date
    	try {
    		$date_time  = Carbon::now();
    		$date_time=$date_time->subMinutes(480);

    		$date=$date_time->toDateString();
    		$user_id=\Auth::id();
    		$users_data = \DB::table('user_transaction_details as utd')
    		->join('url_id_mappings as uim', 'utd.tab_hash_id', '=', 'uim.tab_hash_id')
    		->join('url_id_mappings as uim2', 'utd.parent_tab_hash_id', '=', 'uim2.tab_hash_id')
    		->leftJoin('url_productivity_classifications as upc', 'utd.tab_hash_id', '=', 'upc.tab_hash_id')
    		->select('utd.tab_hash_id', 'utd.parent_tab_hash_id', 'uim.web_url','uim2.web_url as parent_web_url','upc.productivity_class_flag')
    		->whereDate('start_date_time','>=',$date)
    		->where('utd.user_id',$user_id)
    		->distinct('utd.tab_hash_id')
    		->get();

    		$array_user=json_decode($users_data);
    		$tab_hash_id=array();
    		$fromatted_array=array();
    		foreach ($array_user as $key=>$value)
    		{
    			$fromatted_array[$value->parent_tab_hash_id][]=$value;
    			//$tab_hash_id[$key]=$value->parent_tab_hash_id;
    		}
    		//array_multisort($tab_hash_id, SORT_DESC, $array_user);
    		return $fromatted_array;
    	}
    	catch (\Exception $e)
    	{
    		return $e->getMessage();
    	}
		
    	
    }
}
