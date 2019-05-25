<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

use App\concepts;
use App\categories;
use App\sentiment;

use App\url_categories;
use App\url_concepts;
use App\url_sentiment;
use App\Http\Controllers\UrlAnalyticsController;
class WatsonAPIJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $url,$tab_hash_id;
    public function __construct($url,$tab_hash_id)
    {
        //
        $this->url=$url;
        $this->tab_hash_id=$tab_hash_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        
        // try {
            $ibm_url_object=new UrlAnalyticsController($this->url,$this->tab_hash_id);
            $check_nlp_availability=$ibm_url_object->checkNLPAvailability();
            $sentiment_object_id='';
            $category_object_id='';
            $concept_object_id='';
            //get the url and the tab hashid as an input

            //check if ibm data already exists, if not send data to IBM
            //Check sentiment
            //check categories
            //check emotion
            //check  keywords
            //check concepts

            // $exists=url_id_mapping::where('tab_hash_id',$hashed_url)->exists();
            // $exists=url_id_mapping::where('tab_hash_id',$hashed_url)->exists();
            // $exists=url_id_mapping::where('tab_hash_id',$hashed_url)->exists();
            //send url to IBM
            if ($check_nlp_availability)
            {
                $sentiment_analysis=$ibm_url_object->getIbm();
                //sleep(5);
                $sentiment_analysis_array=json_decode($sentiment_analysis,true);

                $sentiment_object=new sentiment;
            $sentiment_exists=sentiment::where('sentiment_hash_id',md5($sentiment_analysis_array['sentiment']['document']['label']))->exists();

            if (!$sentiment_exists)
            {
                
                $sentiment_object->sentiment_name=$sentiment_analysis_array['sentiment']['document']['label'];
                //$concept_object->sentiment_hash_id=md5($sentiment_analysis_array['sentiment']['document']['label']);
                $sentiment_object->sentiment_hash_id=md5($sentiment_analysis_array['sentiment']['document']['label']);
                $sentiment_object->save();
                $sentiment_object_id=$sentiment_object->id;
            }
            else
            {
                $sentiment_object=sentiment::where('sentiment_hash_id',md5($sentiment_analysis_array['sentiment']['document']['label']))->get();
                $sentiment_object_id=$sentiment_object[0]['id'];
            }
            $url_sentiment_obj=new url_sentiment;
            $url_sentiment_obj->sentiment_id=$sentiment_object_id;
            $url_sentiment_obj->tab_hash_id=$this->tab_hash_id;
            $url_sentiment_obj->sentiment_score=$sentiment_analysis_array['sentiment']['document']['score'];
            $url_sentiment_obj->save();

            foreach ($sentiment_analysis_array['categories'] as $category)
            {
                $category_object=new categories;
               $category_hash_id=md5($category['label']);
               $category_exists=categories::where('category_hash_id',$category_hash_id)->exists();
               if (!$category_exists)
               {
                    $category_object1=new categories;
                    $category_object1->category_name=$category['label'];
                    $category_object1->category_hash_id=$category_hash_id;
                    $category_object1->save();
                    $category_object_id=$category_object1->id;
               }
               else
               {
                    $category_object1=new categories;
                    $category_object1=categories::where('category_hash_id',$category_hash_id)->get();
                    $category_object_id=$category_object1[0]['id'];
               }
               $category_url_object=new url_categories;
               $category_url_object->tab_hash_id=$this->tab_hash_id;
               $category_url_object->category_id=$category_object_id;
               $category_url_object->category_score=$category['score'];
               $category_url_object->save();

            }
            foreach ($sentiment_analysis_array['concepts'] as $concept)
            {
                $concept_object=new concepts;
               $concept_hash_id=md5($concept['text']);
               $concept_exists=$concept_object::where('concept_hash_id',$concept_hash_id)->exists();
               if (!$concept_exists)
               {
                    $concept_object->concept_name=$concept['text'];
                    $concept_object->concept_hash_id=$concept_hash_id;
                    $concept_object->save();
                    $concept_object_id=$concept_object->id;

               }
               else
               {
                    $concept_object=concepts::where('concept_hash_id',$concept_hash_id)->get();
                    $concept_object_id=$concept_object[0]['id'];
               }
               $concept_url_object=new url_concepts;
               $concept_url_object->tab_hash_id=$this->tab_hash_id;
               $concept_url_object->concept_id=$concept_object_id;
               $concept_url_object->concept_relevance=$category['relevance'];
               $concept_url_object->save();
            }
            return "Success";
                //$result=$ibm_url_object->addNlpData($sentiment_analysis_array);
                //return $result;

                
            }
            
            //dd($sentiment_analysis);

            //sentiment
            //
            //sentiment url mapping
            
            
            // $concept_object=new concepts;
            // $concept_object->concept_name=$sentiment_analysis_array['concepts'];
            // $concept_object->concept_hash_id='ahjdghjgd';
            // $concept_object->save();
            //get the json response
            //store sentiment to sentiments table of it doesn't exist
            //store sentiment, score and the tab_hash_id in url_sentiment table if it doesn't exist - check using tab_hash_id
            //store concepts in concepts table if it doesn't exist (check the concept_hash_id)
            //store concepts, relevance and tab_hash_id in url_concepts table if ot doesn't exist
            //store categories in categories table if it doesn't already exist
            //stiore categories, score, url in url_categories table if it doesn't already exist

        // }
        // catch (\Exception $e)
        // {
        //     return $e->getMessage();
        // }
        


    }
}
