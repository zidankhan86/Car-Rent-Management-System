<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ContentController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/',[HomeController::class,'dashboard'])->name('dashboard');
Route::get('/add/brand/form',[BrandController::class,'brandForm'])->name('brand.form');
Route::post('/add/brand/store',[BrandController::class,'brandStore'])->name('brand.store');
Route::get('/brand/table',[BrandController::class,'brandTable'])->name('brand.table');

 Route::get('/car/rent/form',[CarController::class,'addCar'])->name('car.form');
 Route::post('/car/rent/form',[CarController::class,'CarStore'])->name('car.store');
 Route::get('/car/rent/table',[CarController::class,'CarTable'])->name('car.table');


 Route::get('/content',[ContentController::class,'contentForm'])->name('content.form');
 Route::post('/content-store',[ContentController::class,'contentStore'])->name('content.store');
 Route::get('/content/list',[ContentController::class,'contentList'])->name('content.list');
