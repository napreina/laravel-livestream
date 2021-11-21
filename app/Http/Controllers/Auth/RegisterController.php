<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Wallet;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;
use Session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function register(){
        $phraseBuilder = new PhraseBuilder(4, '0123456789');
        $builder = new CaptchaBuilder(null, $phraseBuilder);
        $captcha = $builder->build();
        Session::put('phrase', $builder->getPhrase());

        return view('register')->with(compact('captcha'));
    }
    protected function create( AuthyApi $authyApi)
    {       
        
        $user_before = User::latest()->first(); 
        if($user_before){
            $user_id = $user_before->id;
        }else{
            $user_id = 0;
        }
       
        $wallet = new Wallet();
        $wallet->user_id = $user_id + 1 ;
        $wallet->amount = 0;
        $wallet->save();
       
        $user = new User();
        $user->name = $_POST['name'];
        $user->avartar = '';
        $user->phone = $_POST['phone'];
        $user->password = Hash::make($_POST['password']);
        $user->wallet_id = $wallet->id;
        $user->status = 0;
        $user->save();

        $res = array('status'=>'success', 'content'=>'注册成功');
        return json_encode($res);
    }
}