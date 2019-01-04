<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class url_id_mapping extends Model
{
    //
    protected $table = 'url_id_mappings';
    protected $primaryKey = 'tab_hash_id';
}
