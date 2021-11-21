<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Comment;
use App\ChanelUser;
use App\ChanelPublisher;
class CommentController extends Controller
{
    //
    public function store(){
        $channel_id = $_POST['channel_id'];
        $comment_content = $_POST['comment'];
        
        $user = Auth::user();
        $channel_users = ChanelUser::where('chanel_id', $channel_id)->get();
        foreach($channel_users as $channel_user){
            $comment = new Comment();
            $comment->from_id = $user->id;
            $comment->to_id = $channel_user->user_id;
            $comment->message = $comment_content;
            $comment->save();    
        }
       // var_dump($channel_id);exit();
        $publisher_id = ChanelPublisher::where('chanel_id', $channel_id)->first()->publisher_id;
       
        $comment_pub = new Comment();
        $comment_pub->from_id = $user->id;
        $comment_pub->to_id = 100000 + $publisher_id;
        $comment_pub->message = $comment_content;
        $comment_pub->save();

        $user_comment = Comment::where('to_id', $user->id)->first();
        $res = Comment::where('to_id', $user->id)->latest()->delete();
        return json_encode($user_comment);
    }

    public function get(){
        $user = Auth::user();        
        $channel_id = $user->channels->first()->id;
      
        $comments = Comment::where('to_id',$user->id)->get();
        //var_dump($comments);exit();
        $res=array('status'=>'success', 'content'=>$comments);
        foreach($comments as $comment){
            $comment->delete();
        }
        return json_encode($res);
    }
}
