<?php

namespace App\Http\Controllers\frontend;

use App\Models\Car;
use App\Models\Driver;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home(){

        $cars = Car::all();
        $drivers = Driver::simplePaginate(12);
        return view('frontend.pages.home',compact('cars','drivers'));
    }
}
