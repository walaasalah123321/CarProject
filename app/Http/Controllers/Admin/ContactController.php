<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages=Contact::get();
        return view("Admin.Contact.List",compact("messages"));
    }
    function unread(){
        $messages=Contact::where("Read",0)->get();
        return view("Admin.Contact.UnreadMessage",compact("messages"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactRequest $request)
    {
        $data=$request->except("_token");
        Contact::create($data);

        Mail::to("admin@gmail.com")->send(new ContactMail($data));
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $message=Contact::findOrFail($id);
        $message->update(["Read"=>1]);
        return view("Admin.Contact.Show",compact("message"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Contact::Where("id",$id)->delete();
        Alert::success('Successfully', 'Delete Done Successfully');
        return redirect()->back();
    }
}
