<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\CarRentController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\frontend\HomeController as FrontendHomeController;


//Routes

//Frontend

Route::get('/',[FrontendHomeController::class,'home'])->name('home');
Route::get('/car-rent',[CarRentController::class,'carRent'])->name('car.rent');

Route::get('/booking-details/{id}',[BookController::class,'bookingDetails'])->name('booking.details');

Route::get('/driver/home',[DriverController::class,'DriverHome'])->name('driver.home');


//Auth
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login/process',[AuthController::class,'loginProcess'])->name('login.process');
Route::get('/registration',[AuthController::class,'registration'])->name('registration');
Route::post('/registration/store',[AuthController::class,'regStore'])->name('reg.store');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');

Route::get('/my/profile/{id}',[AuthController::class,'myProfile'])->name('my.profile');

Route::post('/user/update/{id}', [AuthController::class, 'update'])->name('user.update');

Route::get('/search',[AuthController::class,'search'])->name('user.search');



Route::group(['middleware'=>'auth','admin','prefix'=>'admin'],function(){

    //Frontend
    Route::get('/booking-form',[BookController::class,'booking'])->name('booking.form');
    Route::post('/booking-store',[BookController::class,'bookingStore'])->name('booking.store');
    Route::get('/booking/list',[BookController::class,'bookingList'])->name('bookings.lists');
    Route::get('/approve/{id}',[BookController::class,'approve'])->name('assigned');
    Route::get('/confirmed/{id}',[BookController::class,'Confirmed'])->name('Confirmed');




 //Backend

 Route::group(['middleware'=>'admin'],function(){


 Route::get('/admin/profile',[AuthController::class,'adminProfile'])->name('admin.profile');
 Route::get('/driver-registration',[AuthController::class,'DriverRegistration'])->name('registration.driver');
 Route::post('/registration/stores',[AuthController::class,'regStores'])->name('reg.stores');

 Route::get('/',[HomeController::class,'dashboard'])->name('dashboard');
 Route::get('/add/brand/form',[BrandController::class,'brandForm'])->name('brand.form');
 Route::post('/add/brand/store',[BrandController::class,'brandStore'])->name('brand.store');
 Route::get('/brand/table',[BrandController::class,'brandTable'])->name('brand.table');
 Route::get('/brand/view/{id}',[BrandController::class,'brandView'])->name('brand.view');
 Route::get('/brand/edit/{id}',[BrandController::class,'brandEdit'])->name('brand.edit');

 Route::get('/car/rent/form',[CarController::class,'addCar'])->name('car.form');
 Route::post('/car/rent/form',[CarController::class,'CarStore'])->name('car.store');
 Route::get('/car/rent/table',[CarController::class,'CarTable'])->name('car.table');
 Route::get('/car/rent/view/{id}',[CarController::class,'CarView'])->name('car.view');
 Route::get('/car/rent/edit/{id}',[CarController::class,'CarEdit'])->name('car.edit');
 Route::post('/car/rent/update/{id}',[CarController::class,'CarUpdate'])->name('car.update');


 Route::get('/report',[ReportController::class,'report'])->name('order.report');
 Route::get('/report/search',[ReportController::class,'reportSearch'])->name('order.report.search');

 Route::get('/add-driver',[DriverController::class,'addDriver'])->name('add.driver');
 Route::post('/add-driver',[DriverController::class,'DriverStore'])->name('driver.store');
});

});

