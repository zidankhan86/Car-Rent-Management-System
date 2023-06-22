<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function addDriver(){
        return view('backend.pages.driver.driverForm');
    }

    public function DriverStore(Request $request){




        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = date('Ymdhis').'.'.$request->image->extension();
            $request->image->storeAs('uploads', $imageName, 'public');
        }


        //dd($request->all());
        Driver::create([

            "name"=>$request->name,
            "about_driver"=>$request->about_driver,
            "image"=>$imageName,
        ]);
        return back();

    }
}
