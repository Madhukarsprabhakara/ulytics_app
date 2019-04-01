<?php

namespace App\Http\Controllers;
//call the controller you want to use its methods
use App\Http\Controllers\StatsController;
use App\Http\Controllers\DNDSessionsController;
use Illuminate\Http\Request;
//call the controller you want to use its methods
//use App\Http\Controllers\StatsController;
use App\url_id_mapping;
use Carbon\Carbon;
class GoogleChartDataController extends Controller
{
    //
    protected function getBarChartData(Request $request)
    {
    	
    	try {
            $user_id=\Auth::id();
            $validator = \Validator::make($request->all(), [
                //'url' => 'required|url',
                'analytics_type' => 'required|numeric',
                'session_id'=> 'nullable|numeric'


            ]);
            if ($validator->fails())
            {
                return $validator->errors();
            }
    		$array=[];
    		$final_array=[];
    		//Current date
    		$user_id=\Auth::id();
			//Get today's date
    		$date_time  = Carbon::now();
            //return $date_time;
    		$date_time=$date_time->subMinutes(480);
    		//$date_time=$date_time->subDays(1);
    		$date=$date_time->toDateString();
    		//get hex and minutes
    		$stats_object = new StatsController;
            if ($request['analytics_type']==1)
            {
                $data= $stats_object->getTotalTimeForParentUrlForTheDay($date,$user_id);
            }
            else
            {
                $session_object=new DNDSessionsController;
                $session_data=$session_object->getSessionActivity(18);

                
                $data= $stats_object->getTotalTimeForSessions($session_data[0]->session_start_time,$session_data[0]->session_end_time,$user_id,18);
                //return $data;
            }
    		
    		$final_array[]=['Websites','mins',['role'=> 'annotation']];
    	//get names for the hex and put it in the array
    		foreach ($data as $key=>$value)
    		{

    			$url_name=url_id_mapping::where('tab_hash_id',$key)->first(['web_url']);
    			$total_time_in_minutes=$value/60000;
    			$value=round($total_time_in_minutes);
    			if ($value>59)
    			{
    				$value_hrs=$value/60;
    				$value_hrs=round($value_hrs,1);
    				$array=[$url_name['web_url'],$value,$value_hrs. ' hrs'];
    			}
    			else
    			{
    				$array=[$url_name['web_url'],$value,$value. ' mins'];
    			}
    			
    			$final_array[]=$array;
    		}
    		return $final_array;
    	//return results
    	}
    	catch(\Exception $e)
    	{
    		$e->getMessage();
    	}
    }	
    protected function getPieChartData()
    {

    }
    protected function getLineChartData()
    {
    	
    }
    protected function getTimeInMinutes()
    {

    }
}
