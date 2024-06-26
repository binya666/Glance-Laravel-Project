<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\LoginModel;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.login');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(LoginModel $loginModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LoginModel $loginModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LoginModel $loginModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LoginModel $loginModel)
    {
        //
    }
}
