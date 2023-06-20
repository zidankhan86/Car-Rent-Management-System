<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

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


                Alert::toast('Login','success');

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

            Alert::success('Registration','success');

            return redirect()->route('home');
        }
        public function logout(){
            Auth::logout();

            // Alert()->success('Success','Logout');
            Alert::success(' Logout','success');
            return redirect()->route('home');

    }

    public function myProfile(){

        $order = Book::all();
        return view('frontend.profile.profile',compact('order'));
    }

    public function adminProfile(){
        return view('backend.pages.profile.profile');
    }

    public function search(Request $request)
    {

        $searchResult=Car::where('car_name','LIKE','%'.$request->search.'%')->get();

      return view('frontend.search.search',compact('searchResult'));
    }
}
