<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Session;

class DashboardPostCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.categories.post-category.index', [
            'title' => 'Post Categories',
            'categories' => Category::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.post-category.create', [
            'title' => 'Create Post Category',
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
            'slug' => 'required|unique:categories',
        ]);

        try {
            Category::create($validation);
            return redirect()->route('dashboard.categories.post-categories.index')->with(['success' => 'New post has been added!']);
        } catch (\Throwable$th) {
            return redirect()->back()->with(['failed' => $th->getMessage()]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $post_category)
    {
        return view('dashboard.categories.post-category.edit', [
            'title' => 'Edit Post Category',
            'category' => $post_category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $post_category)
    {
        $validation = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:categories',
        ]);

        try {
            Category::findOrFail($post_category->id)->update($validation);
            return redirect()->route('dashboard.categories.post-categories.index')->with(['success' => 'New post has been edited!']);
        } catch (\Throwable$th) {
            return redirect()->back()->with(['failed' => $th->getMessage()]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $post_category)
    {
        try {
            $post_category->delete();

            Session::flash('success', 'Post Category Successfully Deleted!');
            return response()->json([
                'success' => true,
                'message' => 'Post Category successfully deleted',
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
