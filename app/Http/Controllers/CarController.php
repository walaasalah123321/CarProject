<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class CarController extends Controller
{
    function __invoke(){
        return view("Car.Error404");
    }
    
    function Home(){
        $cars=Car::where("Active",1)->take(6)->get();
        $tests=Testimonial::where("Publish",1)->take(3)->get();
        return view("Car.Home",compact("cars","tests"));
    }
    function About(){
        return view("Car.About");
    }
    function Listing(){
        $cars=Car::where("Active",1)->paginate(6);
        $tests=Testimonial::where("Publish",1)->take(3)->get();


        return view("Car.Listing",compact("cars","tests"));

    }
    function Testimonial(){
        $tests=Testimonial::where("Publish",1)->get();

        return view("Car.Testimonial",compact("tests"));
    }
    function Blog(){
        return view("Car.Blog");
    }
    function Contact(){
        return view("Car.Contact");

    }
    function Single($id){
        $car=Car::findOrFail($id);
        $categorys=Category::whereHas("Car",function($q){
            $q->where("Active" , "1");
        })->get();
     
        return view("Car.Single",compact("car","categorys"));
    }
}
