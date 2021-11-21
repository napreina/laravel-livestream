<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\GiftHistory;
use App\ChanelUser;
use App\Gift;
use App\Wallet;
use App\ChanelPublisher;

class GiftController extends Controller
{
    //
    public function get(){
        $user = Auth::user();        
        $channel_id = $user->channels->first()->id;
      
        $gift_histories = GiftHistory::where('to_id',$user->id)->get();
        // var_dump($gift_histories);exit();
        $temp_array = array();
        foreach($gift_histories as $gift_history){
            array_push($temp_array, $gift_history->gift);
            $gift_history->delete();
        }
        $res=array('status'=>'success', 'content'=>$temp_array);
        return json_encode($res);
    }
    public function store(){
        
        $user = Auth::user();
        $gift_id = $_POST['gift_id'];
        $gift_name = $_POST['gift_name'];
        $gift_num = $_POST['gift_num'];
        $channel_id = $user->channels->first()->id;
        //var_dump();exit();
        $gift = Gift::where('id', $gift_id)->first();
        
        $user_wallet = $user->wallet->amount;
        $user_wallet_amount = $user_wallet - $gift->amount * $gift_num;  
        
        if($user_wallet_amount >0){
             
            $channel_users = ChanelUser::where('chanel_id',$channel_id)->get();  
                
            foreach($channel_users as $channel_user){
                $gift_history = new GiftHistory();
                $gift_history->from_id = $user->id;
                $gift_history->to_id = $channel_user->user_id;
                $gift_history->gift_id = $gift_id;
                $gift_history->save();    
            }
            
            $publisher_id = ChanelPublisher::where('chanel_id', $channel_id)->first()->publisher_id;
            
            $gift_history_pub = new GiftHistory();
            $gift_history_pub->from_id = $user->id;
            $gift_history_pub->to_id = 100000 + $publisher_id;
            $gift_history_pub->gift_id = $gift_id;
            $gift_history_pub->save();    

            $wallet = Wallet::where('id', $user->wallet_id)->first();
            $wallet->amount = $user_wallet_amount;
            $wallet->save();

            $res = GiftHistory::where('to_id', $user->id)->latest()->delete();
            return json_encode($gift);
            
        }else{
            $res = array('status'=>'error', 'content'=>'not enough money');
            return json_encode($res);
        }
       
    }
}
