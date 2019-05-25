<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\user_transaction_details;
use App\url_id_mapping;
use App\Jobs\WatsonAPIJob;
class ExtensionController extends Controller
{
    //

	protected function postTabStats(Request $request)
	{
		try {


			if (\Auth::check())
			{
				$user_id=\Auth::id();
				$validator = Validator::make($request->all(), [
					'url' => 'required|url',
					'start_date_time' => 'nullable|date',
					'end_date_time' => 'nullable|date',
					'total_time' => 'nullable|numeric',
					'timezone' => 'nullable|numeric',
					'type' => 'required|numeric', //1 - start 2 - end
					'transaction_id'=>'nullable|numeric',
					'tab_operation_type'=>'nullable|string'


				]);
				//return $request->all();
				if ($validator->fails())
				{
					return $validator->errors();
				}
				
				$hashed_url=md5($request['url']);
				//Dispatch url and hashed_url here
				//WatsonAPIJob::dispatch($request['url'],$hashed_url);
				//dispatch job only of sentiment analysis not available
				
				//dispatch(new WatsonAPIJob($request['url'],$hashed_url));
				
				$parent_url_hash=$this->returnParentUrl($request['url']);
				//Check if parent exists
				$exists_parent=url_id_mapping::where('tab_hash_id',$parent_url_hash['hash'])->exists();
				if (!$exists_parent)
				{
					$url_id_mapping_object = new url_id_mapping;
					$url_id_mapping_object->tab_hash_id = $parent_url_hash['hash'];
					$url_id_mapping_object->web_url=$parent_url_hash['url'];
					$url_id_mapping_object->save();
				}
				//check if the hash already exists in the mapping table if not insert
				$exists=url_id_mapping::where('tab_hash_id',$hashed_url)->exists();
				//insert url and has md5 mapping in url_id_mapping table
				if (!$exists)
				{
					$url_id_mapping_object = new url_id_mapping;
					$url_id_mapping_object->tab_hash_id = $hashed_url;
					$url_id_mapping_object->web_url=$request['url'];
					$url_id_mapping_object->save();
				}

				
				//insert startdatetime, transactionid and userid in user_transaction_details
				switch ($request['type']) {
					case 1:

						$transaction_id = user_transaction_details::create(['user_id'=>$user_id,'tab_hash_id'=>$hashed_url,'parent_tab_hash_id'=>$parent_url_hash['hash'],'start_date_time'=>$request['start_date_time'],'timezone'=>$request['timezone']]);
   
						return response()->json(['status' => 'Successfully created a Transaction','transaction_id'=>$transaction_id->id]);

					break;
					case 2:

						$flight = user_transaction_details::updateOrCreate(
							['id' => $request['transaction_id'],'tab_hash_id'=>$hashed_url],
							['total_time' => $request['total_time'],'end_date_time'=>$request['end_date_time'],'type_of_tab_operation'=>$request['tab_operation_type']]
						);

					echo "i equals 1";
					break;
					default:
					echo "i equals 2";
					
				}

				
				
			}
			else
			{
				return "Not Logged In";
			}



		}
		catch (\Exception $e)
		{
			return $e->getMessage();
		}
    }
    protected function returnParentUrl($url)
    {
    	try {
    		$url_array=  parse_url($url);
    		$hashed_url=md5($url_array['host']);
    		$parent_url=$url_array['host'];
    		$result['hash']=$hashed_url;
    		$result['url']=$parent_url;
    		return $result;
    	}
    	catch(\Exception $e)
    	{
    		$e->getMessage();
    	}
    	
    }
}
