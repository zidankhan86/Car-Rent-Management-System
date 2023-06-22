<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function addDriver(){
        return view('backend.pages.driver.driverForm');
    }
}
