<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\AccountModel;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.account');
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
    public function show(AccountModel $accountModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AccountModel $accountModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AccountModel $accountModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AccountModel $accountModel)
    {
        //
    }
}
