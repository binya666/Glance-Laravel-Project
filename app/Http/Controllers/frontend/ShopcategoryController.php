<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\ShopcategoryModel;
use Illuminate\Http\Request;

class ShopcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.shop-category');
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
    public function show(ShopcategoryModel $shopcategoryModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ShopcategoryModel $shopcategoryModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ShopcategoryModel $shopcategoryModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShopcategoryModel $shopcategoryModel)
    {
        //
    }
}
