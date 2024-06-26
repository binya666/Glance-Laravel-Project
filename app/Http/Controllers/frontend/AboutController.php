<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\AboutModel;
use App\Models\backend\AdminTeammemberModel;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $member = AdminTeammemberModel::all();

        // Pass members to the view
        return view('frontend.about', compact('member'));
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
    public function show(AboutModel $aboutModel)
    {
        $member = AdminTeammemberModel::find($id);
        return view('frontend.about', ['member' => $member]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutModel $aboutModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AboutModel $aboutModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutModel $aboutModel)
    {
        //
    }
}
