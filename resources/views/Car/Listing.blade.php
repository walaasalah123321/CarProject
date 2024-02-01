@extends("Car.Layouts.Page",["Page"=>"Listings"])

@section("content")
   
    @include("Car.includes.CarList")
    <div class="site-section ">
      @include("Car.includes.Testimonial")
    </div>
    @include("Car.includes.Waiting")

@endsection