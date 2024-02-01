@extends("Car.Layouts.Page",["Page"=>"About"])

@section("content")
    @include("Car.includes.Company")
    @include("Car.includes.Team")
    @include("Car.includes.History")
    @include("Car.includes.Waiting")

@endsection