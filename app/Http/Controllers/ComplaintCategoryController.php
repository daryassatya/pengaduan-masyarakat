<?php

namespace App\Http\Controllers;

use App\Models\ComplaintCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ComplaintCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.categories.complaint-category.index', [
            'title' => 'Complaint Categories',
            'categories' => ComplaintCategory::all(),
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.complaint-category.create', [
            'title' => 'Create Complaint Category',
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:complaint_categories',
        ]);

        try {
            ComplaintCategory::create($validation);
            return redirect()->route('dashboard.categories.complaint-categories.index')->with(['success' => 'New Complaint has been added!']);
        } catch (\Throwable$th) {
            return redirect()->back()->with(['failed' => $th->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ComplaintCategory  $complaintCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ComplaintCategory $complaintCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ComplaintCategory  $complaintCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ComplaintCategory $complaintCategory)
    {
        return view('dashboard.categories.complaint-category.edit', [
            'title' => 'Edit Complaint Category',
            'category' => $complaintCategory,
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ComplaintCategory  $complaintCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComplaintCategory $complaintCategory)
    {
        $validation = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:categories',
        ]);

        try {
            ComplaintCategory::findOrFail($complaintCategory->id)->update($validation);
            return redirect()->route('dashboard.categories.complaint-categories.index')->with(['success' => 'New complaint has been edited!']);
        } catch (\Throwable$th) {
            return redirect()->back()->with(['failed' => $th->getMessage()]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ComplaintCategory  $complaintCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComplaintCategory $complaintCategory)
    {
        try {
            $complaintCategory->delete();

            Session::flash('success', 'Complaint Category Successfully Deleted!');
            return response()->json([
                'success' => true,
                'message' => 'Complaint Category successfully deleted',
            ], 200);
        } catch (\Throwable$th) {
            Session::flash('failed', $th->getMessage());

            return response()->json([
                'success' => false,
                'message' => $th->getMessage(),
            ], 200);
        }
    }
}
