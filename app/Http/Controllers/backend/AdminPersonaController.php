<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\AdminPersonaModel;

class AdminPersonaController extends Controller
{
    public function index()
    {
        $personas = AdminPersonaModel::all();
        return view('backend.persona', compact('personas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'persona_name' => 'required',
            'short_description' => 'required',
            'personaImg' => 'required|mimes:png,jpg,jpeg',
        ]);

        $imagename = "persona_upload_" . time() . "." . $request->file('personaImg')->extension();
        $folderPath = 'backend/images/persona';
        $imagePath = $folderPath . '/' . $imagename;
        $request->personaImg->move(public_path($folderPath), $imagename);

        $persona = new AdminPersonaModel();
        $persona->name = $request->persona_name;
        $persona->short_description = $request->short_description;
        $persona->imgpath = $imagePath;
        $persona->save();

        return back()->withSuccess('Thanks for Submitting!');
    }

    public function editPersona($id)
    {
        $persona = AdminPersonaModel::findOrFail($id);
        return view('backend.persona-edit', compact('persona'));
    }

    public function updatePersona(Request $request, $id)
{
    // Validate request data
    $request->validate([
        'persona_name' => 'required|min:3',
        'short_description' => 'required|min:3',
        'personaImg' => 'nullable|mimes:jpeg,jpg,png|max:10000',
    ]);

    // Find the persona record by ID
    $persona = AdminPersonaModel::findOrFail($id);

    // Update persona details
    $persona->name = $request->persona_name;
    $persona->short_description = $request->short_description;

    // Handle image update if a new image is provided
    if ($request->hasFile('personaImg')) {
        $imageName = 'persona_upload_' . time() . '.' . $request->file('personaImg')->extension();
        $folderPath = 'backend/images/persona';
        $imagePath = $folderPath . '/' . $imageName;
        $request->personaImg->move(public_path($folderPath), $imageName);
        $persona->imgpath = $imagePath;
    }

    // Save the updated persona record
    $persona->save();

    // Redirect back with success message
    return redirect()->back()->withSuccess('Persona Record Updated Successfully');
}

    public function deletePersona($id)
    {
        $persona = AdminPersonaModel::findOrFail($id);
        $persona->delete();
        return back()->withSuccess('Persona Record Deleted Successfully');
    }
}
