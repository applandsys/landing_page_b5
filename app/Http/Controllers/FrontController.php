<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Support\Facades\Session;


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


    public function signup(Request $request, $slug){
        if ($request->isMethod('post')) {

            $validation = Validator::make($request->all(),[
                'name' => 'required|string|min:5|max:100',
                'email' => 'required|string|email|unique:users',
                'whatsapp' => 'required',
                'password'=> 'required|min:4',
                'confirm_password' => 'required|same:password',
            ]);
            // if( $validation->fails())
            // {
            //     return redirect('/')->with('errors', 'Validation failed');
            // }
            $users = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $response = [
                    'success' => 200,
                    'data' => Auth::user(),
                    'is_login' => true,
                ];

                if($slug=='confirm'){
                    return redirect('/detail')->with('success', 'Registration Successful');
                }elseif($slug=='enroll'){
                    return redirect('/payment')->with('success', 'Registration Successful');
                }

            }
            //


        }else{
            return view('front.signup',compact('slug'));
        }

    }


    public function signin(Request $request){


        if ($request->isMethod('post')) {

            $validation = Validator::make($request->all(),[
                'email' => 'required|string|email',
                'password'=> 'required|min:4'
            ]);


            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $response = [
                    'success' => 200,
                    'data' => Auth::user(),
                    'is_login' => true,
                ];

                if($slug=='confirm'){
                    return redirect('/detail')->with('success', 'Registration Successful');
                }elseif($slug=='enroll'){
                    return redirect('/payment')->with('success', 'Registration Successful');
                }

            }
            //


        }else{
            return view('front.signin');
        }
    }


    public function payment(Request $request){
        return view('front.payment');
    }


}
