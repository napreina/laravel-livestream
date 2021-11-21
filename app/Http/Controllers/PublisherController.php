<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publisher;
use Hash;
use Session;
use App\Chanel;
use App\Comment;
use App\GiftHistory;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;

class PublisherController extends Controller
{
    //
    public function login(){
        
        return view('publisher.login');
    }

    public function register(){
        $phraseBuilder = new PhraseBuilder(4, '0123456789');
        $builder = new CaptchaBuilder(null, $phraseBuilder);
        $captcha = $builder->build();
        Session::put('phrase', $builder->getPhrase());
        //var_dump($captcha);exit();
        return view('publisher.register')->with(compact('captcha'));
    }

    public function doregister(){
        $checkcode = Session::get('phrase');
        //var_dump($checkcode);exit();
        if($checkcode == $_POST['captcha']){
            $publisher = new Publisher();
     
            $publisher->name = $_POST['name'];
          
            $publisher->avartar1 = '';
            $publisher->avartar2 = '';
            $publisher->phone = $_POST['phone'];
       
            $publisher->password = Hash::make($_POST['password']);
            //var_dump($_POST['age']);exit();
            $publisher->age = $_POST['age'];
            
            $publisher->country = $_POST['country'];
            $publisher->gender = $_POST['gender'];
            $publisher->rating = 0;
            $publisher->save();
          
            $res = array('status'=>'success', 'content'=>'注册成功');
            return json_encode($res);
        }else{
            $res = array('status'=>'error', 'content'=>'注册失败');
            return json_encode($res);

        }
       
    }

    public function dologin(){
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $publisher_exist = Publisher::where('phone', $phone)->first();
        //var_dump( Hash::check($password, $publisher_exist->password));exit();
        if (Hash::check($password, $publisher_exist->password)) { 
            
            Session::put('auth_publisher', $publisher_exist);
            $res = array('status'=>'success', 'content'=>'登录成功');
            return json_encode($res);
        }else{
            $res = array('status'=>'error', 'content'=>'登录失败');
            return json_encode($res);
        }
    }

    public function channel(){

        if (!Session::has('auth_publisher'))
        {
            //
            $res=array('status'=>'error', 'content'=>'您不是注册用户。');
            return json_encode($res);
        }
         
        $publisher = Session::get('auth_publisher'); 
        $my_channel = $publisher->channel->first();
        //var_dump($my_channel->id);exit();
        //$my_channel = Chanel::where('id',$channel_id)->first();
        $channels = Chanel::get();
        return view('publisher.channel')->with(compact('my_channel', 'channels'));
    }

    public function comment_get(){
       
        if (!Session::has('auth_publisher'))
        {
            //
            $res=array('status'=>'error', 'content'=>'您不是注册用户。');
            return json_encode($res);
        }
         
        $user = Session::get('auth_publisher'); 
       
        $comments = Comment::where('to_id', 100000 + $user->id)->get();
        //var_dump($comments);exit();
        $res=array('status'=>'success', 'content'=>$comments);
        foreach($comments as $comment){
            $comment->delete();
        }
        return json_encode($res);
    }

    public function gift_get(){
        if (!Session::has('auth_publisher'))
        {
            //
            $res=array('status'=>'error', 'content'=>'您不是注册用户。');
            return json_encode($res);
        }
         
        $user = Session::get('auth_publisher'); 
        
        $gift_histories = GiftHistory::where('to_id', 100000 + $user->id)->get();
        //var_dump($user->id);exit();
        $temp_array = array();
        foreach($gift_histories as $gift_history){
            array_push($temp_array, $gift_history->gift);
            $gift_history->delete();
        }
        $res=array('status'=>'success', 'content'=>$temp_array);
        return json_encode($res);
    }

    public function set_change(){

        $channel_id = $_POST['channel_id']; 
        //var_dump($channel_id);exit(); 
        $status = $_POST['status'];     
        if($status == '-1'){
            $res = array('status'=>'error', 'content'=>'select channel');
            return json_encode($res);
        }
        $channel = Chanel::where('id', $channel_id)->first();       
        $channel->status = $status;
        $channel->save();

        $channel2 = Chanel::where('id', $status)->first();
        //var_dump($channel);exit();
        $res=array('status'=>'success', 'channel1'=>$channel->address, 'channel2'=>$channel2->address);
        return json_encode($res);

    }

    public function set_change_org(){

        $channel_id = $_POST['channel_id'];    
        $status = $_POST['status'];     
        
        $channel = Chanel::where('id', $channel_id)->first();       
        $channel->status = $status;
        $channel->save();
        //var_dump($channel);exit();
        $res=array('status'=>'success', 'channel1'=>$channel->address);
        return json_encode($res);

    }
}
