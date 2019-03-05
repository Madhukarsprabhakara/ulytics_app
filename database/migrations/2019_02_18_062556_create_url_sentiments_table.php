<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrlSentimentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('url_sentiments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tab_hash_id')->unique();
            $table->integer('sentiment_id')->unsigned();
            $table->foreign('sentiment_id')->references('id')->on('sentiments');
            $table->double('sentiment_score');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('url_sentiments');
    }
}
