<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        $cars = Car::all();
        return view('frontend.pages.home',compact('cars'));
    }
}
