@extends("Car.Layouts.Page",["Page"=>"Testimonials"])

@section("content")
   
    <div class="site-section bg-light">
      @include("Car.includes.Testimonial")
    </div>
    @include("Car.includes.Waiting")

@endsection