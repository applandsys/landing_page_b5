<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class FrontController extends Controller
{
    public function homepage(){
        $users = User::all();
        return view('front.homepage', compact('users'));
    }

    public function detail(){
        return view('front.detail');
    }

}
