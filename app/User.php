<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    public $remember_token=false;
    protected $table = "table_users";

    public function channels(){
        return $this->belongsToMany('App\Chanel', 'table_chanel_users', 'user_id', 'chanel_id');
    }
    public function wallet(){
        return $this->belongsTo('App\Wallet','wallet_id');
    }
}
