<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_transaction_details extends Model
{
    //
    protected $table = 'user_transaction_details';
    protected  $primaryKey = 'id';
    protected $fillable = ['user_id','tab_hash_id','start_date_time','end_date_time','total_time','timezone','type_of_tab_operation'];
}
