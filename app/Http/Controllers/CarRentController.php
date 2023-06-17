<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarRentController extends Controller
{
    public function carRent(){
        return view('frontend.pages.rentCar');
    }
}
