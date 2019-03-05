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
            $ibm_url_object=new UrlAnalyticsController($this->url);

            //get the url and the tab hashid as an input

            //check if ibm data already exists, if not send data to IBM
            // $exists=url_id_mapping::where('tab_hash_id',$hashed_url)->exists();
            // $exists=url_id_mapping::where('tab_hash_id',$hashed_url)->exists();
            // $exists=url_id_mapping::where('tab_hash_id',$hashed_url)->exists();
            //send url to IBM

            $sentiment_analysis=$ibm_url_object->getIbm();
            
            //dd($sentiment_analysis);
            $concept_object=new concepts;
            $concept_object->concept_name=$sentiment_analysis;
            $concept_object->concept_hash_id='ahjdghjgd';
            $concept_object->save();
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
