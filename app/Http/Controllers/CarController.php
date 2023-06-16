<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function addCar(){
        return view('backend.pages.manageCar.carForm');
    }

    public function CarStore(Request $request){

        //dd($request->all());

        Car::create([

            "car_name" =>$request->car_name,
            "brand_type" =>$request->brand_type,
            "fuel_type" =>$request->fuel_type,
            "image" =>$request->image,
            "fee" =>$request->fee,
            "description" =>$request->description,
        ]);
        return back();

    }
}
