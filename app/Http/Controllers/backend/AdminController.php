<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {

        if(session()->has('email')){
            $Name = session('first_name') . " " . session('last_name');
            return view('backend.index', compact('Name'));

        } else {
            return view('backend.login');
        }

    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show(string $id)
    {
        //
    }
    public function edit(string $id)
    {
        //
    }
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
