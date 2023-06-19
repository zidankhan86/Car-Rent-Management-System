<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){

        return view('backend.pages.auth.login');
    }

    public function loginProcess(Request $request){

        //dd($request->all());
            $credential = $request->only(['email','password']);

            if(Auth::attempt($credential))
            {
        if(auth()->user()->role == 'admin' or 'customer'){
            if(auth()->user()->role == 'admin'){


                // Alert()->success('Success','Login');

                return redirect()->route('dashboard');
            }else{
                return redirect()->route('home');

            }
        }
            }

        }
}
