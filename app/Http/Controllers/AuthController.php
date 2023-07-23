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
        $credentials = $request->only(['email', 'password']);

    if (Auth::attempt($credentials)) {
        $user = auth()->user();

        if (in_array($user->role, ['admin', 'customer', 'driver'])) {
            if (auth()->user()->role == 'admin') {
                Alert::toast('Login', 'success');
                return redirect()->route('dashboard');
            } elseif (auth()->user()->role == 'driver') {
                Alert::toast('Login', 'success');
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('home');
            }
        }
    }

    // Authentication failed or invalid role
    return redirect()->back()->withErrors(['message' => 'Invalid credentials or role.']);
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

    public function myProfile($id){

        $order = Book::all();
        $update =  User::find($id);
        return view('frontend.profile.profile',compact('order','update'));
    }

    public function adminProfile($id){

            $update=User::find($id);
        return view('backend.pages.profile.profile',compact('update'));
    }

    public function search(Request $request)
    {

        $searchResult=Car::where('car_name','LIKE','%'.$request->search.'%')->get();

      return view('frontend.search.search',compact('searchResult'));
    }

    public function DriverRegistration(){
        return view('backend.pages.driverAuth.registration');
    }

    public function regStores(Request $request){

        //dd($request->all());
        User::create([


            "name"=>$request->name,
            "email"=>$request->email,
            "phone"=>$request->phone,
            "address"=>$request->address,
            "password"=>bcrypt($request->password),
            "role"=>"driver",
        ]);

       Alert::toast()->success('Registration','success');
        return redirect()->route('dashboard');
    }

    public function myProfileEdit($id){

        $edit =  User::find($id);
        return view('frontend.profile.edit',compact('edit'));
    }

    public function update(Request $request ,$id)
    {
        $update = User::find($id);

       // dd($request->all());
        $update->update([

            "name"=>$request->name,
            "phone"=>$request->phone,
            "email"=>$request->email,
            "address"=>$request->address,


        ]);
        Alert::toast()->success('Profile Update Success');
        return redirect()->back();
    }

    public function userList(){

        $list = User::all();
        return view('backend.pages.auth.list',compact('list'));
    }
}
