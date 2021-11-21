<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChanelUser;
use Auth;
use App\Chanel;
use App\Report;

class ChannelController extends Controller
{
    //
    public function index(Request $request){
        $user = Auth::user();
        $exist_user = ChanelUser::where('user_id', $user->id)->first();
        
        $channel_id = $_GET['id'];
        if(!$exist_user){          
            $channel_user = new ChanelUser;
            $channel_user->chanel_id = $channel_id;
            $channel_user->user_id = $user->id;
            $channel_user->save();
        }else{
           $exist_user->chanel_id = $channel_id;
           $exist_user->save();
        }
        
        $channel = Chanel::where('id',$channel_id)->first();

        return view('channel')->with(compact('channel'));
    }

    public function get_change(){
        $user = Auth::user();
        $channel = $user->channels->first();
        //var_dump($channel->status);exit();
        if($channel->status == '1'){
            //var_dump($channel->status);exit();
            $res = array('status'=>'unchanged', 'channel1'=>$channel->address);
        }else{
            $content = Chanel::where('id', $channel->status)->first()->address;
            $res = array('status'=>'changed', 'channel1'=>$channel->address, 'channel2'=>$content);
        }        
        return json_encode($res);

    }

    public function report(){
        $user = Auth::user();
        $channel = $user->channels->first();
        $report = new Report();
        $report->from_id = $user->id;
        $report->to_id = $channel->id;
        $report->report_message = $_POST['report_message'];
        $report->save();

        $res = array('status'=>'success', 'content'=>'成功');
        return json_encode($res);
    }
}
