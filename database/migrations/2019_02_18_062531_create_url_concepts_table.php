<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrlConceptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('url_concepts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tab_hash_id')->unique();
            $table->integer('concept_id')->unsigned();
            $table->foreign('concept_id')->references('id')->on('concepts');
            $table->double('concept_relevance');
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
        Schema::dropIfExists('url_concepts');
    }
}
