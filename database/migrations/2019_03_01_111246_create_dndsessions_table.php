<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDndsessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dndsessions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('session_name',500);
            $table->timestamp('session_start_time')->nullable();
            $table->timestamp('session_end_time')->nullable();
            $table->timestamp('session_intermediate_end_time')->nullable();
            $table->bigInteger('session_total_time')->nullable();
            $table->integer('session_timezone')->nullable();
            $table->integer('status')->nullable(); //In progress-1, Paused-2, completed-0
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
        Schema::dropIfExists('dndsessions');
    }
}
