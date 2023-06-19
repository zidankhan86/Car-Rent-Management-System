<?php

namespace App\Http\Controllers;

use App\Models\User;
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

        public function registration(){
            return view('backend.pages.auth.registration');
        }

        public function regStore(Request $request){
            $validatedData = $request->validate([
                'name' => 'required|string',
                'email' => 'required|email|unique:users',
                'phone' => 'required',
                'address' => 'required|string',
                'password' => 'required|min:5',
            ]);

            //dd($request->all());
            User::create([

                "name"=>$request->name,
                "email"=>$request->email,
                "phone"=>$request->phone,
                "address"=>$request->address,
                "password"=>bcrypt($request->password),
                "role"=>"customer",

            ]);

            return redirect()->route('home');
        }
        public function logout(){
            Auth::logout();

            // Alert()->success('Success','Logout');

            return redirect()->route('home');

    }

    public function myProfile(){
        return view('frontend.profile.profile');
    }
}
