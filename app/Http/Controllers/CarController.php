<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function addCar(){

        $brands=Brand::all();
        return view('backend.pages.manageCar.carForm',compact('brands'));
    }

    public function CarStore(Request $request){
        //dd($request->all());


        $request->validate([
            'car_name' => 'required|string|max:255',
            'fuel_type' => 'required|string|max:255',
            'fee' => 'required|numeric|min:0',
            'sit' => 'required|integer|min:2|max:16',
            'description' => 'required|string',
        ]);



        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = date('Ymdhis').'.'.$request->image->extension();
            $request->image->storeAs('uploads', $imageName, 'public');
        }

        //dd($imageName);



        Car::create([
            "brand_id" =>$request->brand_id,
            "car_name" =>$request->car_name,
            "fuel_type" =>$request->fuel_type,
            "image" =>$imageName,
            "fee" =>$request->fee,
            "sit"=>$request->sit,
            "description" =>$request->description,
        ]);
        return back();

    }

    public function CarTable(){

        $cars = Car::all();
        return view('backend.pages.manageCar.carList',compact('cars'));
    }

    public function CarView($id){

        $cars = Car::find($id);
        return view('backend.pages.manageCar.carView',compact('cars'));
    }
}
