<?php

use App\Http\Controllers\CarController;
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
Route::fallback(CarController::class);

Route::group(["prefix"=>"Car","as"=>"Car.","controller"=>CarController::class],function(){
    Route::get("/","Home")->name("Home");
    Route::get("/About","About")->name("About");
    Route::get("/Listing","Listing")->name("Listing");
    Route::get("/Testimonial","Testimonial")->name("Testimonial");
    Route::get("/Blog","Blog")->name("Blog");
    Route::get("/Contact","Contact")->name("Contact");
    Route::get("/Single/{id}","Single")->name("Single");
});



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
