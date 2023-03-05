<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function admingSignin(Request $request){


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
                $admin = Admin::first();
               $email = $request->email;
               $password = Hash::make($request->password);
               if($email == $admin->email && $password == $admin->password){
                    return redirect()->route('admin.dashboard');
               }else{
                echo "Credentional Does not match";
               }



                }



        }else{
            return view('admin.signin');
        }
    }
}
