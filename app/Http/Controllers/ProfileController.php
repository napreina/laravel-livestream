<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class ProfileController extends Controller
{
    //
    public function index(){
        $user = Auth::user();
        return view('profile')->with(compact('user'));
    }

    public function upload_img(){
        $user = Auth::user();
        return view('profile_upload')->with(compact('user'));
    }

    public function update_img(){
        $user = Auth::user();      
        $croped_image = $_POST['image'];
        
        list($type, $croped_image) = explode(';', $croped_image);
        list(, $croped_image)      = explode(',', $croped_image);

        $croped_image = base64_decode($croped_image);
       
        $image_name = $this->quickRandom().time().'.png';
     
        $profile_user = User::find($user->id);
        $profile_user->avartar = "images/".$image_name;
        $profile_user->save();

        file_put_contents("upload/images/".$image_name, $croped_image);
        $res = array('status'=>'success', 'content'=>'successfully updated.');
        return json_encode($res);
    }

    public static function quickRandom($length = 16)
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
    }

    public function verify(){

    }

    public function identify(){
        $user = Auth::user();
        return view('profile_identify')->with(compact('user'));
    }

    public function identify_update(){
        $user = Auth::user();

        $image_obverse = $_POST['image_obverse'];
        list($type, $image_obverse) = explode(';', $image_obverse);
        list(, $image_obverse)      = explode(',', $image_obverse);
        $image_obverse = base64_decode($image_obverse);       
        $image_obverse_name = $this->quickRandom().time().'.png';

        file_put_contents("upload/images/card/".$image_obverse_name, $image_obverse);

        $image_rear = $_POST['image_rear'];

        list($type, $image_rear) = explode(';', $image_rear);
        list(, $image_rear)      = explode(',', $image_rear);
        $image_rear = base64_decode($image_rear);       
        $image_rear_name = $this->quickRandom().time().'.png';

        file_put_contents("upload/images/card/".$image_rear_name, $image_rear);
        

        $profile_user = User::find($user->id);
        $profile_user->status = "images/card/".$image_obverse_name.",".$image_rear_name;
        $profile_user->save();
        //var_dump($profile_user);exit();
        $res = array('status'=>'success', 'content'=>'successfully updated.');
        return json_encode($res);
    }
}
