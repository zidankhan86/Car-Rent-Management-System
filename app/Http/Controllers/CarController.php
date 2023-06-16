<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function addCar(){
        return view('backend.pages.manageCar.carForm');
    }
}
