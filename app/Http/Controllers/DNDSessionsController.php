<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dndsessions;
use App\Http\Controllers\StatsController;
class DNDSessionsController extends Controller
{

	public function setSessions(Request $request)
	{


        try {
            $user_id=\Auth::id();
            $validator = \Validator::make($request->all(), [
                //'url' => 'required|url',
                'session_start_date_time' => 'nullable|date',
                'session_end_date_time' => 'nullable|date',
                'session_intermediate_end_time'=>'nullable|date',
                'session_total_time' => 'nullable|numeric',
                'session_timezone' => 'nullable|numeric',
                'session_status' => 'required|numeric', //1 - start 2 - end
                'session_name'=>'nullable|string',
                'session_id'=>'nullable|numeric'


            ]);
            if ($validator->fails())
            {
                return $validator->errors();
            }

            if ($request['session_total_time']>60)
            {
                $arr = array('message' => 'Session duration cannot be more than 60 minutes', 'status' => 0);
                return json_encode($arr);
            }
            if ($request['session_status']==1)
            {
                $sessionsObject = new dndsessions;
                $sessionsObject->user_id = $user_id;
                $sessionsObject->session_name=$request['session_name'];
                $sessionsObject->session_start_time=$request['session_start_date_time'];
                $sessionsObject->session_total_time=$request['session_total_time'];
                $sessionsObject->status=$request['session_status'];
                if($sessionsObject->save())
                {
                    $arr = array('message' => 'Session started', 'data'=>$sessionsObject->id, 'status' => 0);
                    return json_encode($arr);
                }
            }
            else if($request['session_status']==2)
            {

            }
            else
            {
                $session_info=\DB::table('dndsessions')
                ->where('user_id', $user_id)
                ->where('id',$request['session_id'])
                ->update(['session_end_time' => $request['session_end_date_time']]);

                return dndsessions::where('id',$request['session_id'])->get();
                //return $session_info;
            }
            
            //return $request->all();

            if ($validator->fails())
            {
                return $validator->errors();
            }


        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
		//
    	//sessions
    	//session_name
        //user_id
    	//start_time
    	//elapsed time - get every 30 seconds
    	//session time so far - (start_time-end_time) in minutes
        //intermediate_end_time
    	//end_time
    	//status
    	//total_time	

    }
    public function getSessionsForTheDay(Request $request)
    {
        try {
            $user_id=\Auth::id();
            $validator = \Validator::make($request->all(), [
                //'url' => 'required|url',
                'date_select' => 'nullable|date'


            ]);
            if ($validator->fails())
            {
                return $validator->errors();
            }

            $sessions=dndsessions::whereDate('created_at',$request['date_select'])->where('user_id',$user_id)->get();
            return $sessions;


        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }
    public function getSessionActivity($session_id)
    {
        try {
            $user_id=\Auth::id();
            
            $session_info=dndsessions::where('id',$session_id)->get();
            return $session_info;

        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }
    

}
