<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Support\Facades\Session;


use App\Models\User;
use App\Models\Payment;

class FrontController extends Controller
{
    public function homepage(){
        $users = User::all();
        return view('front.homepage', compact('users'));
    }

    public function detail(){
        return view('front.detail');
    }

// public function signupView($slug){
//     return view('front.signup',compact('slug'));
// }
    public function signup(Request $request, $slug){
        if ($request->isMethod('post')){

            $validation = Validator::make($request->all(),[
                'name' => 'required|string',
                'email' => 'required|email|unique:users',
                'whatsapp' => 'required',
                'password'=> 'required|min:4',
                'confirm_password' => 'required|same:password',
                ],
                [
                    'email.required' => 'Email must be unique',
                    'password.required' => 'Password must be 4 character',
                    'confirm_password.required' => 'Confirm password must same as password',
                ]);


                if($validation->fails()){
                    return back()->withErrors($validation->errors())->withInput();
                    //return redirect()->back()->with('error', 'Validation failed');
                }else{
                    if($slug == 'confirm'){
                        $user_type = 'free';
                    }elseif($slug == 'enroll'){
                        $user_type = 'premium';
                    }
                    $users = User::create([
                        'name' => $request->name,
                        'email' => $request->email,
                        'password' => Hash::make($request->password),
                        'user_type' => $user_type,
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
                }

        }
        else{
            return view('front.signup',compact('slug'));
        }

    }


    public function signin(Request $request, $slug){


        if ($request->isMethod('post')) {

            $validation = Validator::make($request->all(),[
                'email' => 'required|string|email',
                'password'=> 'required|min:4'
            ],
            [
                'email.required' => 'Email must be unique',
                'password.required' => 'Password must be 4 character',
            ]
            );

            if($validation->fails()){
                return back()->withErrors($validation->errors())->withInput();
                //return redirect()->back()->with('error', 'Validation failed');
            }else{
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

            }

        }else{
            return view('front.signin', compact('slug'));
        }
    }

    public function payment(Request $request){
        if ($request->isMethod('post')) {
            $user_id = Auth::user()->id;
            $contact_number = $request->contact_number;
            $transaction_number = $request->transaction_id;
            $payment_type = $request->payment_type;

            Payment::create([
                'user_id'=>$user_id,
                'contact_number'=>$contact_number,
                'transaction_number'=>$transaction_number,
                'payment_type'=>$payment_type,
            ]);
            return redirect()->back();

        }else{
            return view('front.payment');
        }
    }



}
