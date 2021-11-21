<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    //
    protected $table = "table_wallets";

    public function user(){
        return  $this->hasOne('App\User','user_id');
    }
}
