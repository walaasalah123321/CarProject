<?php

namespace App\Http\Controllers\Admin;

use App\Trait\UploadImage;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\TestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;

class TestimonialController extends Controller
{
    use UploadImage;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials=Testimonial::get();
        return view("Admin.Testimonial.List",compact("testimonials"));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Admin.Testimonial.Add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TestimonialRequest $request)
    {

        $data=$request->except("_token");
        $data["image"]=$this->uploadFile($request->image,"Admin/Image/Testimonial/");
        $data["Publish"]=isset($request->Publish);
        Testimonial::create($data);
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
        $Testimonial=Testimonial::findOrFail($id);
        return view("Admin.Testimonial.Edit",compact("Testimonial"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestimonialRequest $request, string $id)
    {
        $test=Testimonial::findOrFail($id);
        $data=$request->except("_token");
        if($request->has("image")){
            unlink("Admin/Image/Testimonial/".$test->image);
            $data["image"]=$this->uploadFile($request->image,"Admin/Image/Testimonial/");
        }
        $data["Publish"]=isset($request->Publish);
        $test->update($data);
        Alert::success('Successfully', 'Update Done Successfully');
        return redirect()->route("Admin.Testimonial.List");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        
        $Testimonial=Testimonial::findOrFail($id);
        unlink("Admin/Image/Testimonial/".$Testimonial->image);
        $Testimonial->delete();
        Alert::success('Successfully', 'Delete Done Successfully');

        return redirect()->back();
    }
}
