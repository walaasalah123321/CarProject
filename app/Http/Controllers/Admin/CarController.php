<?php

namespace App\Http\Controllers\Admin;

use App\Models\Car;
use App\Models\Category;
use App\Trait\UploadImage;
use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCarRequest;
use RealRashid\SweetAlert\Facades\Alert;

class CarController extends Controller
{
    use UploadImage;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query=Car::Query();
        $request=Request();
        if($Search=$request->Search){
            $query->where("Title","LIKE","%$Search%");
        }
        $cars=$query->get();
        return view('Admin.Car.List',compact("cars"));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cats=Category::get();
        return view('Admin.Car.Add',compact("cats"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarRequest $request)
    {
        $data=$request->except("_token");
        $data["Image"]=$this->uploadFile($request->Image,"Admin/Image/Car/");
        $data["Active"]=isset($request->Active);
        Car::create($data);
        Alert::success('Successfully', 'Add Done Successfully');
        return Redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car=Car::findOrFail($id);
        $cats=Category::get();
        return view("Admin.Car.Edit",compact("car","cats"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarRequest $request, string $id)
    {
        $car=Car::findOrFail($id);
        $data=$request->except("_token");
        if($request->has("Image")){
            unlink("Admin/Image/Car/".$car->Image);
            $data["Image"]=$this->uploadFile($request->Image,"Admin/Image/Car/");
        }
        $data["Active"]=isset($request->Active);
        $car->update($data);
        Alert::success('Successfully', 'Update Done Successfully');
        return redirect()->route("Admin.Car.List");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $car=Car::findOrFail($id);
        unlink("Admin/Image/Car/".$car->Image);
        $car->delete();
        Alert::success('Successfully', 'Delete Done Successfully');
        return redirect()->back();
    }
}
