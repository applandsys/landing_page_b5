<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function homepage(){
        return view('front.homepage');
    }

    public function detail(){
        return view('front.detail');
    }

}
