<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table="table_category";

    public function channel(){
        return $this->hasMany('App\Chanel');
    }
}
