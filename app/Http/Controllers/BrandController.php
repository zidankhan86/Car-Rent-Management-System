<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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

    Alert::toast('Success! Brand Added','success');


    return back();

}

public function brandTable(){


    $brands = Brand::all();
    return view('backend.pages.brand.brandList',compact('brands'));
}

public function brandView($id){

    $brands = Brand::find($id);
    return view('backend.pages.brand.brandView',compact('brands'));
}

public function brandEdit($id){

    $brands = Brand::find($id);
    return view('backend.pages.brand.brandEdit',compact('brands'));
}

public function brandDelete($id){

    $delete = Brand::find($id);

        $delete->delete();


    Alert::toast()->success('deleted');

    return back();
}

}
