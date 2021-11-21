<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiftHistory extends Model
{
    //
    protected $table = "table_gift_histories";

    public function gift(){
        return $this->belongsTo('App\Gift','gift_id');
    }
}
