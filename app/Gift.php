<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    //
    protected $table = "table_gifts";

    public function gift_histories(){
        return $this->hasMany('App\GiftHistory');
    }
}
