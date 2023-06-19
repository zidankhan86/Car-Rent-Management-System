<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarRentController;
use App\Http\Controllers\frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[FrontendHomeController::class,'home'])->name('home');
Route::get('/car-rent',[CarRentController::class,'carRent'])->name('car.rent');

Route::get('/booking-form',[BookController::class,'booking'])->name('booking.form');
Route::post('/booking-store',[BookController::class,'bookingStore'])->name('booking.store');
Route::get('/booking-details/{id}',[BookController::class,'bookingDetails'])->name('booking.details');

Route::get('/booking/list',[BookController::class,'bookingList'])->name('bookings.lists');

//auth
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login/process',[AuthController::class,'loginProcess'])->name('login.process');
Route::get('/registration',[AuthController::class,'registration'])->name('registration');
Route::post('/registration/store',[AuthController::class,'regStore'])->name('reg.store');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');

Route::get('/my/profile',[AuthController::class,'myProfile'])->name('my.profile');

Route::get('/search',[AuthController::class,'search'])->name('user.search');




Route::group(['middleware'=>'auth','admin','prefix'=>'admin'],function(){

Route::get('/admin/profile',[AuthController::class,'adminProfile'])->name('admin.profile');



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



 //Route::get('/content',[ContentController::class,'contentForm'])->name('content.form');
 //Route::post('/content-store',[ContentController::class,'contentStore'])->name('content.store');
 //Route::get('/content/list',[ContentController::class,'contentList'])->name('content.list');
});

