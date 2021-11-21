<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chanel extends Model
{
    //
    protected $table = "table_chanels";

    /**
	*Admin Model Functions
    */



    /**
	*Client Model Functions
    */
    public function publisher(){
       return $this->belongsToMany('App\Publisher', 'table_chanel_publisher','chanel_id', 'publisher_id');
    }

    public function users(){
        return $this->belongsToMany('App\User', 'table_chanel_users','chanel_id', 'user_id');
    }

    public function category(){
        return $this->belongsTo('App\Category', 'category_id');
    }

    
}
