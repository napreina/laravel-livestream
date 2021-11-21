<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    //
    protected $table = "table_publishers";

    public function channel(){
        return $this->belongsToMany('App\Chanel', 'table_chanel_publisher','publisher_id', 'chanel_id');
    }
}
