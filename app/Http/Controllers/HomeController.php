<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Brand;
use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(){

       //Not Yet Done
       $totalAssigned = Book::where('status', 'Assigned')->count();

       $totalBook = Book::get()->count();
       $totalCar = Car::get()->count();
       $totalUser = User::get()->count();
       $totalBrand = Brand::get()->count();

        return view('backend.pages.home',compact('totalBook','totalCar','totalUser','totalBrand','totalAssigned'));
    }
}
