<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TestimonialController;

Route::group(["prefix"=>"Admins","as"=>"Admin."],function(){
    Route::group(["prefix"=>"Users","as"=>"User.","controller"=>UserController::class],function(){
        Route::get("/Add","create")->name("add");
        Route::get("/List","index")->name("List");
    });
    Route::group(["prefix"=>"Category","as"=>"Category.","controller"=>CategoryController::class],function(){
        Route::get("/Add","create")->name("add");
        Route::get("/List","index")->name("List");
        Route::post("/store","store")->name("store");
        Route::get("/delete/{id}","destroy")->name("delete");
        Route::get("/edit/{id}","edit")->name("edit");
        Route::post("/Updata/{id}","update")->name("update");
    });
    Route::group(["prefix"=>"Testimonial","as"=>"Testimonial.","controller"=>TestimonialController::class],function(){
        Route::get("/Add","create")->name("add");
        Route::get("/List","index")->name("List");
        Route::post("/store","store")->name("store");
        Route::get("/delete/{id}","destroy")->name("delete");
        Route::get("/edit/{id}","edit")->name("edit");
        Route::post("/Updata/{id}","update")->name("update");
    });
    Route::group(["prefix"=>"Contact","as"=>"Contact.","controller"=>ContactController::class],function(){
        Route::get("/List","index")->name("List");
        Route::post("/store","store")->name("store");
        Route::get("/Show/{id}","show")->name("Show");
        Route::get("/Unread","unread")->name("unread");

        Route::get("/delete/{id}","destroy")->name("delete");
    });
    Route::group(["prefix"=>"Car","as"=>"Car.","controller"=>CarController::class],function(){
        Route::get("/Add","create")->name("add");
        Route::get("/List","index")->name("List");
        Route::post("/store","store")->name("store");
        Route::get("/delete/{id}","destroy")->name("delete");
        Route::get("/edit/{id}","edit")->name("edit");
        Route::post("/Updata/{id}","update")->name("update");
    });
});
