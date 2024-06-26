<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminFaqsModel;
use Illuminate\Http\Request;

class AdminFaqsController extends Controller
{
    public function index()
    {
        $faqs = AdminFaqsModel::all();
        return view('backend.add-faqs', compact('faqs'));
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $request->validate([
            'faq_title' => 'required',
            'description' => 'required',
        ]);

        $faqs = new AdminFaqsModel();
        $faqs->faq_title = $request->faq_title;
        $faqs->description= $request->description;
        $faqs->save();

        return back()->withSuccess('Thanks for Submitting!');
    }
    public function show(AdminFaqsModel $adminFaqsModel)
    {
        $faqs = AdminTeammemberModel::find($id);
        return view('backend.add-faqs', ['faqs' => $faqs]);
    }
    public function editFAQ($id)
    {
        // dd($id);
        $faqs = AdminFaqsModel::where('id', $id)->first();
        return view('backend.faq-edit', ['faqs' => $faqs]);
    }
    public function updateFAQ(Request $request, $id)
    {
        $request->validate([
            'faq_title' => 'required',
            'description' => 'required'
        ]);

        $faqs = AdminFaqsModel::findOrFail($id);
        $faqs->faq_title = $request->faq_title;
        $faqs->description = $request->description;
        $faqs->save();

        return redirect('/add-faqs')->withSuccess('FAQ Updated Successfully');
    }


    public function deleteFAQ($id)
    {
        $faq = AdminFaqsModel::where('id', $id)->first();
        if ($faq) {
            $faq->delete();
            return back()->withSuccess('FAQ Deleted Successfully');
        }
        return back()->withError('FAQ Not Found');
    }
    public function destroy(AdminFaqsModel $adminFaqsModel)
    {
        //
    }
}
