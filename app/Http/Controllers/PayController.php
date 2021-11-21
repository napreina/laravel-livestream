<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayController extends Controller
{
    //
    public function index(){
        return view('pay');
    }
    public function alipay(){
        return view('pay_alipay');
    }
}
