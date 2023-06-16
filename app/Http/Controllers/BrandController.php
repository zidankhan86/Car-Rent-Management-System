<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function brandForm(){
        return view('backend.pages.brand.brandForm');
    }
public function brandStore(Request $request){

    $request->validate([
        'brand_name' => 'required|string|max:255',
        'brand_type' => 'required|string|max:255',
    ]);


    //dd($request->all());

    Brand::create([

        "brand_name" =>$request->brand_name,
        "brand_type" =>$request->brand_type,
    ]);

    return back();

}

public function brandTable(){
    return view('backend.pages.brand.brandList');
}



}
