<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\ShopsingleModel;
use App\Models\backend\AdminProductModel;
use Illuminate\Http\Request;

class ShopsingleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.shop-single');
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
    public function show($id)
    {
        $product = AdminProductModel::findOrFail($id);
        return view('frontend.shop-single', compact('product')); // Pass $product to the view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ShopsingleModel $shopsingleModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ShopsingleModel $shopsingleModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShopsingleModel $shopsingleModel)
    {
        //
    }
}
