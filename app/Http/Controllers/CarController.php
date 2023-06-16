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

        $request->validate([
            'car_name' => 'required|string|max:255',
            'brand_type' => 'required|string|max:255',
            'fuel_type' => 'required|string|max:255',
             // Assuming it's an image file
            'fee' => 'required|numeric',
            'description' => 'required|string',
        ]);



        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = date('Ymdhis').'.'.$request->image->extension();
            $request->image->storeAs('uploads', $imageName, 'public');
        }

        //dd($imageName);

        //dd($request->all());

        Car::create([

            "car_name" =>$request->car_name,
            "brand_type" =>$request->brand_type,
            "fuel_type" =>$request->fuel_type,
            "image" =>$imageName,
            "fee" =>$request->fee,
            "description" =>$request->description,
        ]);
        return back();

    }
}
