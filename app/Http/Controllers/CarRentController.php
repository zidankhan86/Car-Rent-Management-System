<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarRentController extends Controller
{
    public function carRent(){

        $cars = Car::all();
        return view('frontend.pages.rentCar',compact('cars'));
    }
}
