<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CatergoryRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Categories=Category::get();

        return view("Admin.Category.List",compact("Categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Admin.Category.Add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CatergoryRequest $request)
    {
        
        
        $data=$request->except("_token");
        Category::create($data);
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
       $Category= Category::findOrFail($id);
       return view("Admin.Category.Edit",compact("Category"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CatergoryRequest $request, string $id)
    {
        $data=$request->except("_token");
        Category::where("id",$id)->update($data);
        Alert::success('Successfully', 'Update Done Successfully');
        return redirect()->route("Admin.Category.List");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {

        $cat=Category::findOrFail($id);
        if($cat->Car->count()==0){
            $cat->delete();
            Alert::success('Successfully', 'Delete Done Successfully');

        }else{
            Alert::error('Stop', 'You Cant Delete This Category ');
        }
        return redirect()->back();
    }
}
