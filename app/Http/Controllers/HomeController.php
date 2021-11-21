<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chanel;
use App\Publisher;
use App;

class HomeController extends Controller
{
    //
    public function index()
    {
        $channels = Chanel::get();
        $publishers = Publisher::orderBy('updated_at')->take('6')->get();
        $hot_publishers = Publisher::orderBy('rating')->take('3')->get();
        $countries = $this->get_country();
        $ages = $this->get_age();
        //var_dump($publishers);exit();
        return view('home')->with(compact('channels', 'publishers', 'hot_publishers','countries','ages'));
    }

    public function get_country(){
        $countries = array();
        $publishers = App\Publisher::get();
        foreach($publishers as $publisher){
            array_push($countries, $publisher->country);
        }
        return collect($countries)->unique()->values()->all();
    }

    public function get_age(){
        $age = array();
        $publisher = App\Publisher::get();
        foreach($publisher as $publisher){
            array_push($age, $publisher->age);
        }
        return collect($age)->unique()->values()->all();
    }

    public function search_result(){
        if($_POST['country']=='Country'){
            $country='';
        }else{
            $country = $_POST['country'];
        }
        if($_POST['gender']=='Gender'){
            $gender='';
        }else{
            $gender = $_POST['gender'];
        }
        if($_POST['age']=='Age'){
            $age='';
        }else{
            $age = $_POST['age'];
        }
              
        $publishers = Publisher::where('country','LIKE', '%'.$country.'%')->
                                where('gender', 'LIKE', '%'.$gender.'%')->
                                where('age','LIKE', '%'.$age.'%')->get();
        // 
       
       
        $channels = Chanel::get();
        $hot_publishers =Publisher::orderBy('rating')->take('3')->get();
        $countries = $this->get_country();
            
    
        $ages = $this->get_age();
        //var_dump($ages);exit();
        //var_dump($hot_channels);exit();
        return view('home')->with(compact('channels', 'publishers', 'hot_publishers','countries','ages'));
    }

    public function lang($locale){
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
