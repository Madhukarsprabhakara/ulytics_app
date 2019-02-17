<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user_transaction_details;
use App\url_id_mapping;
use Carbon\Carbon;
class StatsController extends Controller
{
    //
	protected function getCardStats()
	{
		
		try {
			$user_id=\Auth::id();
			//Get today's date
			$date_time  = Carbon::now();
			$date_time=$date_time->subMinutes(480);

			$date=$date_time->toDateString();
			//Calculate the sum of times of all websites
			$json_card['total_time_during_day']=$this->getTotalTimeForTheDay($date,$user_id);
			
			//No of distinct total websites 
			$json_card['total_urls_during_day']=$this->getTotalNoOfURLsForTheDay($date,$user_id);

			//No of distinct new total websites vs yesterday
			$json_card['no_of_new_websites_visited_today']=$this->getNoOfNewWebsitesVisitedForTheDay($date,$user_id,0);
			$json_card['no_of_revisited_websites_today']=$this->getNoOfNewWebsitesVisitedForTheDay($date,$user_id,1);
			$json_card['time_spent_on_new_websites']=$this->getTotalTimeSpentOnNewWebsitesVisitedForTheDay($date,$user_id);
			$json_card['total_time_for_parent_url']=$this->getTotalTimeForParentUrlForTheDay($date,$user_id);
			return $json_card;

		//time spent on productive

		//time spent on unproductive

		//Combine all the data
		}
		catch (\Exception $e)
		{
			return $e->getMessage();
		}
		
	}
	protected function getTotalTimeForTheDay($date,$user_id)
	{
		try {
			$sum_total_today=\DB::table('user_transaction_details')
			->where('user_id',$user_id)
			->whereDate('start_date_time',$date )
			->sum('total_time');
			$total_time_in_minutes=$sum_total_today/60000;
			if ($total_time_in_minutes>59)
			{

				$time_unit='hrs';
				$total_time_in_hours=$total_time_in_minutes/60;
				$result['value']=round($total_time_in_hours, 2);
				$result['unit']=$time_unit;
				$result['label']='TOTAL TIME SPENT ONLINE';
			}
			else
			{
				$time_unit='mins';
				$result['value']=round($total_time_in_minutes, 2);
				$result['unit']=$time_unit;
				$result['label']='TOTAL TIME SPENT ONLINE';

			}
			return $result;

		}
		catch(\Exception $e)
		{
			return $e->getMessage();
		}
	}
	protected function getTotalNoOfURLsForTheDay($date,$user_id)
	{
		try {
			$no_urls = \DB::table('user_transaction_details')->distinct()
			->where('user_id',$user_id)
			->whereDate('start_date_time',$date )
			->get(['parent_tab_hash_id'])->count();
			$result['value']= $no_urls;
			$result['label']='NO OF WEBSITES VISITED TODAY';
			return $result;
		}
		catch(\Exception $e)
		{
			return $e->getMessage();
		}
	}
	protected function getNoOfNewWebsitesVisitedForTheDay($date,$user_id,$flag)
	{
		try {
			//get yesterdays distinct websites
			$distinct_today_arr=[];
			$distinct_yest_arr=[];
			$date_time  = Carbon::now();
			$date_time=$date_time->subMinutes(480);
			$date_time=$date_time->subDays(1);
			$date_yesterday=$date_time->toDateString();
			$distinct_yesterday = \DB::table('user_transaction_details')->distinct()
			->where('user_id',$user_id)
			->whereDate('start_date_time',$date_yesterday)
			->get(['parent_tab_hash_id']);
			$distinct_yesterday=json_decode(json_encode($distinct_yesterday),TRUE);

			foreach ($distinct_yesterday as $key=>$value)
			{
				$distinct_yest_arr[]=$value['parent_tab_hash_id'];
			}
			
			//get todays distinct websites
			$distinct_today = \DB::table('user_transaction_details')->distinct()
			->where('user_id',$user_id)
			->whereDate('start_date_time',$date )
			->get(['parent_tab_hash_id']);
			
			$distinct_today=json_decode(json_encode($distinct_today),TRUE);
			foreach ($distinct_today as $key=>$value)
			{
				$distinct_today_arr[]=$value['parent_tab_hash_id'];
			}
			
			//get diff between today and yesterday i,e today-yesterday	
			if ($flag==0)
			{
				$count_of_new_websites=count(array_diff($distinct_today_arr,$distinct_yest_arr));
				$result['value']=$count_of_new_websites;
				$result['label']='NO OF NEW WEBSITES TODAY';
				return $result;
			}
			else
			{
				$count_of_returning_websites=count(array_intersect($distinct_today_arr,$distinct_yest_arr));
				$result['value']=$count_of_returning_websites;
				$result['label']='NO OF REVISITED WEBSITES TODAY';
				return $result;
			}
			
			
			

		}
		catch(\Exception $e)
		{
			return $e->getMessage();
		}
	}
	protected function getTotalTimeSpentOnNewWebsitesVisitedForTheDay($date,$user_id)
	{
		try {
			//get yesterdays distinct websites
			$distinct_today_arr=[];
			$distinct_yest_arr=[];
			$date_time  = Carbon::now();
			$date_time=$date_time->subMinutes(480);
			$date_time=$date_time->subDays(1);
			$date_yesterday=$date_time->toDateString();
			$distinct_yesterday = \DB::table('user_transaction_details')->distinct()
			->where('user_id',$user_id)
			->whereDate('start_date_time',$date_yesterday)
			->get(['tab_hash_id']);
			$distinct_yesterday=json_decode(json_encode($distinct_yesterday),TRUE);

			foreach ($distinct_yesterday as $key=>$value)
			{
				$distinct_yest_arr[]=$value['tab_hash_id'];
			}
			
			//get todays distinct websites
			$distinct_today = \DB::table('user_transaction_details')->distinct()
			->where('user_id',$user_id)
			->whereDate('start_date_time',$date )
			->get(['tab_hash_id']);
			
			$distinct_today=json_decode(json_encode($distinct_today),TRUE);
			foreach ($distinct_today as $key=>$value)
			{
				$distinct_today_arr[]=$value['tab_hash_id'];
			}
			$new_websites=array_values(array_diff($distinct_today_arr,$distinct_yest_arr));
			$sum_total_new_websites=\DB::table('user_transaction_details')
			->where('user_id',$user_id)
			->whereDate('start_date_time',$date )
			->whereIn('tab_hash_id', $new_websites)
			->sum('total_time');
			$sum_total_new_websites=$this->getTimeInMinsorHrs($sum_total_new_websites,'TIME SPENT ON NEW WEBSITES');
			return $sum_total_new_websites;


		}
		catch(\Exception $e)
		{
			return $e->getMessage();
		}
	}
	protected function getTotalTimeSpentOnReturnWebsitesVisitedForTheDay()
	{
		try {

		}
		catch(\Exception $e)
		{
			
		}
	}
	protected function getTimeInMinsorHrs($time,$label)
	{
		try {
			$total_time_in_minutes=$time/60000;
			if ($total_time_in_minutes>59)
			{

				$time_unit='hrs';
				$total_time_in_hours=$total_time_in_minutes/60;
				$result['value']=round($total_time_in_hours, 2);
				$result['unit']=$time_unit;
				$result['label']=$label;
			}
			else
			{
				$time_unit='mins';
				$result['value']=round($total_time_in_minutes, 2);
				$result['unit']=$time_unit;
				$result['label']=$label;

			}
			return $result;
		}
		catch(\Exception $e)
		{
			$e->getMessage();
		}
	}
	public function getTotalTimeForParentUrlForTheDay($date,$user_id)
	{
		try {
			//fire the query
			$get_top_n_with_names=user_transaction_details::where('user_id',$user_id)
			->groupBy('parent_tab_hash_id')
			->whereDate('start_date_time',$date)
			->selectRaw('sum(total_time) as total, parent_tab_hash_id')->orderByRaw('sum(total_time) DESC')->pluck('total','parent_tab_hash_id')->take(7);
			//->sum('total_time');

			// $get_top_n_with_names1=\DB::table('user_transaction_details AS a')
			// ->select(\DB:raw())
			return $get_top_n_with_names;
		}
		catch (\Exception $e)
		{
			$e->getMessage();
		}
	}
	public function getAverageTimeBetweenTabSwitches()
	{
		try {
			
		}
		catch (\Exception $e)
		{
			return $e->getMessage();
		}
	}


}
