<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminCustomerlistModel;
use Illuminate\Http\Request;

class AdminCustomerlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.customer-list');
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
    public function show(AdminCustomerlistModel $adminCustomerlistModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdminCustomerlistModel $adminCustomerlistModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AdminCustomerlistModel $adminCustomerlistModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdminCustomerlistModel $adminCustomerlistModel)
    {
        //
    }
}
