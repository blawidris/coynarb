<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesContoller extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function markets(){
        return view('frontend.markets');
    }

    public function crypto_market(){
        return view('frontend.market-crypto');
    }

    public function about(){
        return view('frontend.aboutus');
    }

    public function terms(){
        return view('frontend.terms');
    }

    public function minning_wall(Request $request){
        // dd($request);
        return view('frontend.minning-wall');
    }

    public function profile(){
        return view('frontend.profile');
    }

    public function settings(){
        return view('frontend.settings');
    }

    // public function wallets(){
    //     return view('frontend.wallet');
    // }

}
