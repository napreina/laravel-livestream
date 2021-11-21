<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(){
        return view('login');
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    public function dologin(Request $request){

        if (Auth::attempt( ['phone' => $request['phone'], 'password' => $request['password']])) {
            $res = array('status'=>'success', 'content'=>'登录成功');
            return json_encode($res);
        }else{
            $res = array('status'=>'error', 'content'=>'登录失败');
            return json_encode($res);
        }
    }
    public function get_member(){
        $member_id = $_POST['memberid'];
        $user = User::where('id', $member_id)->first();
        $res =array('status'=>'success', 'data'=>$user);
        return json_encode($res);
    }
}
