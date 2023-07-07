<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{

    public function booking(){

        $brands=User::all();
        return view('frontend.booking.bookingForm',compact('brands'));
    }

    public function bookingStore(Request $request){

        // Validate the incoming request data
$validator = Validator::make($request->all(), [
    'name' => 'required',
    'phone' => 'required',
    'from_date' => 'required|date|after_or_equal:'.today()->format('Y-m-d'),
    'to_date' => 'required|date|after:from_date',
    'road' => 'required',
    'city' => 'required',
    'location' => 'required',
]);

// Check if the validation fails
if ($validator->fails()) {
    // Redirect back or return an error response with the validation errors
    return redirect()->back()->withErrors($validator)->withInput();
}

        //dd($request->all());

        Book::create([
            "user_id"=>$request->user_id,
            "name" =>$request->name,
            "phone" =>$request->phone,
            "from_date" =>$request->from_date,
            "to_date" =>$request->to_date,
            "road" =>$request->road,
            "city" =>$request->city,
            "location" =>$request->location,
            "status" =>'assign',
        ]);
        Alert::toast('We will contact soon','success');
        return redirect()->route('home');

    }

    public function bookingDetails($id){

        $cars = Car::find($id);
        return view('frontend.booking.bookingDetails',compact('cars'));
    }

    public function bookingList(){

        $userBooking = Book::all();
        return view('backend.pages.order.orderlist',compact('userBooking'));
    }

    public function approve($id)
    {
        //dd($id);
        $appoint = Book::findOrFail($id);
        $appoint->update([
            'status' => 'Assigned',
        ]);
       Alert::toast()->success(' Assigned');
        return redirect()->back();
    }

    public function Confirmed($id)
    {
        //dd($id);
        $appoint = Book::findOrFail($id);
        $appoint->update([
            'status' => 'Confirmed',
        ]);
       Alert::toast()->success(' Confirmed Ride');
        return redirect()->back();
    }
}
