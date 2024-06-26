<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\FaqsModel;
use App\Models\backend\AdminFaqsModel;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = AdminFaqsModel::all();
        return view('frontend.faqs', ['faqs' => $faqs]);
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
    public function show(FaqsModel $faqsModel)
    {
        $faqs = AdminFaqsModel::find($id);
        return view('frontend.faqs', ['faqs' => $faqs]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FaqsModel $faqsModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FaqsModel $faqsModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FaqsModel $faqsModel)
    {
        //
    }
}
