<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTransactionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_transaction_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->increments('transaction_id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('tab_hash_id');
            //$table->foreign('tab_hash_id')->references('tab_hash_id')->on('url_id_mappings');
            $table->timestamp('start_date_time')->nullable();
            $table->timestamp('end_date_time')->nullable();
            $table->bigInteger('total_time')->nullable();
            $table->integer('timezone')->nullable();
            $table->string('type_of_tab_operation')->nullable();
            $table->timestamps();
            //$table->primary(array('transaction_id', 'user_id','tab_hash_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_transaction_details');
    }
}
