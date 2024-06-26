<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.contact');
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
    public function store(Request $request)
    {
        $request->validate(
            [
                'firstname' => 'required',
                'lastname' => 'required',
                'email' => 'email|required',
                'message' => 'required'
            ]
        );

        $contact = new ContactModel();
        $contact->firstname = $request->firstname;
        $contact->lastname = $request->lastname;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        return back()->withSuccess('Thanks for Contacting. We\'ll Contact you ASAP!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactModel $contactModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactModel $contactModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactModel $contactModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactModel $contactModel)
    {
        //
    }
}
