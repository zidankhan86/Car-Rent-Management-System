<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    public function booking(){
        return view('frontend.booking.bookingForm');
    }

    public function bookingStore(Request $request){

        // Validate the incoming request data
$validator = Validator::make($request->all(), [
    'name' => 'required',
    'phone' => 'required',
    'from_date' => 'required|date',
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
            "name" =>$request->name,
            "phone" =>$request->phone,
            "from_date" =>$request->from_date,
            "to_date" =>$request->to_date,
            "road" =>$request->road,
            "city" =>$request->city,
            "location" =>$request->location,

        ]);

        return back();

    }
}
