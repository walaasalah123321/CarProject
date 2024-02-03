<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=User::get();
        return view("Admin.User.List",compact("users"));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Admin.User.Add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $data=$request->except(["_token"]);
        $data["password"]=Hash::make($data['password']);
        $data["Active"]=isset($data["Active"]);
        $data["email_verified_at"]=time();
        User::create($data);
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
      $user=User::findOrFail($id);
      return view("Admin.User.Edit",compact("user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $id)
    {
        $user=User::findOrFail($id);
        $data=$request->except(["_token"]);
        if(($request->password!=$user->password)){
            $data["password"]=Hash::make($data['password']);
        }
        $data["Active"]=isset($data["Active"]);
        $user->update($data);
        Alert::success('Successfully', 'Update Done Successfully');
        return Redirect()->route('Admin.Car.List');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
