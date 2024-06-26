<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminTeammemberModel;
use Illuminate\Http\Request;

class AdminTeammemberController extends Controller
{
    public function index()
    {
        $members = AdminTeammemberModel::all();
        return view('backend.teammember', compact('members'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'member_name' => 'required',
            'designation' => 'required',
            'memberImg' => 'required|mimes:png,jpg,jpeg',
        ]);

        $imagename = "member_upload_" . time() . "." . $request->file('memberImg')->extension();
        $folderPath = 'backend/images';
        $imagePath = $folderPath . '/' . $imagename;
        $request->memberImg->move(public_path($folderPath), $imagename);

        $member = new AdminTeammemberModel();
        $member->name = $request->member_name;
        $member->designation = $request->designation;
        $member->imgpath = $imagePath;
        $member->save();

        return back()->withSuccess('Thanks for Submitting!');
    }

    public function editTeam($id)
{
    $team = AdminTeammemberModel::findOrFail($id);
    return view('backend.team-edit', compact('team'));
}


public function updateTeam(Request $request, $id)
{
    $request->validate([
        'member_name' => 'required|min:3',
        'designation' => 'required|min:3',
        'memberImg' => 'nullable|mimes:jpeg,jpg,png|max:10000',
    ]);

    $team = AdminTeammemberModel::findOrFail($id);

    // Update name and designation
    $team->name = $request->member_name;
    $team->designation = $request->designation;

    // Update image if new image is provided
    if ($request->hasFile('memberImg')) {
        $imageName = 'member_upload_' . time() . '.' . $request->file('memberImg')->extension();
        $folderPath = 'backend/images';
        $imagePath = $folderPath . '/' . $imageName;
        $request->memberImg->move(public_path($folderPath), $imageName);
        $team->imgpath = $imagePath;
    }

    $team->save();

    return redirect()->back()->withSuccess('Member Record Updated Successfully');
}



    public function deleteTeam($id)
    {
        $team = AdminTeammemberModel::findOrFail($id);
        $team->delete();
        return back()->withSuccess('Member Record Deleted Successfully');
    }
}
