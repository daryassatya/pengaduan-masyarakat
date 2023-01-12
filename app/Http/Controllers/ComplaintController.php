<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\ComplaintCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.complaints.index', [
            'title' => 'Manage Complaints',
            'complaints' => Complaint::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.complaints.create', [
            'title' => 'Create Complaint',
            'complaintCategories' => ComplaintCategory::all(),
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
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:complaints',
            'complaint_category_id' => 'required',
            'image' => 'image|file|max:1024',
            'dokumen' => 'mimes:pdf,doc,docx|max:2048',
            'body' => 'required',
        ]);

        try {
            if ($request->file('image')) {
                $validatedData['image'] = $request->file('image')->store('complaint-images');
            }
            if ($request->file('dokumen')) {
                $validatedData['dokumen'] = $request->file('dokumen')->store('complaint-dokumen');
            }

            $validatedData['user_id'] = auth()->user()->id;
            $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 150, '...'); //strip_tags untuk menghilangkan tag html

            Complaint::create($validatedData);

            return redirect()->route('manage-complaint.index')->with(['success' => 'New complaint has been added!']);
        } catch (\Throwable$th) {
            return redirect()->back()->with(['failed' => $th->getMessage()]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Complaint  $manage_complaint
     * @return \Illuminate\Http\Response
     */
    public function show(Complaint $manage_complaint)
    {
        return view('dashboard.complaints.show', [
            'title' => 'Show Complaint',
            'complaint' => $manage_complaint,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Complaint  $manage_complaint
     * @return \Illuminate\Http\Response
     */
    public function edit(Complaint $manage_complaint)
    {
        return view('dashboard.complaints.edit', [
            'title' => 'Edit Complaint',
            'complaint' => $manage_complaint,
            'complaintCategories' => ComplaintCategory::all(),
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Complaint  $manage_complaint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Complaint $manage_complaint)
    {
        $rules = [
            'title' => 'required|max:255',
            'complaint_category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required',
        ];

        try {
            if ($request->slug != $manage_complaint->slug) {
                $rules['slug'] = 'required|unique:complaints';
            }

            $validatedData = $request->validate($rules);

            if ($request->file('image')) {
                if ($manage_complaint->image) {
                    Storage::delete($manage_complaint->image);
                }
                $validatedData['image'] = $request->file('image')->store('complaint-images');
            }

            if ($request->file('dokumen')) {
                if ($manage_complaint->dokumen) {
                    Storage::delete($manage_complaint->dokumen);
                }
                $validatedData['dokumen'] = $request->file('dokumen')->store('complaint-dokumen');
            }

            $validatedData['user_id'] = auth()->user()->id;
            $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 150, '...'); //strip_tags untuk menghilangkan tag html

            Complaint::where('id', $manage_complaint->id)->update($validatedData);
            return redirect()->route('manage-complaint.index')->with(['success' => 'Complaint has been edited!']);
        } catch (\Throwable$th) {
            return redirect()->back()->with(['failed' => $th->getMessage()]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Complaint  $manage_complaint
     * @return \Illuminate\Http\Response
     */
    public function destroy(Complaint $manage_complaint)
    {
        try {
            if ($manage_complaint->image) {
                Storage::delete($manage_complaint->image);
            }
            if ($manage_complaint->dokumen) {
                Storage::delete($manage_complaint->dokumen);
            }

            $manage_complaint->delete();
            // Post::destroy($post->id);

            Session::flash('success', 'Post Successfully Deleted!');
            return response()->json([
                'success' => true,
                'message' => 'Post successfully deleted',
            ], 200);
        } catch (\Throwable$th) {
            Session::flash('failed', $th->getMessage());

            return response()->json([
                'success' => false,
                'message' => $th->getMessage(),
            ], 200);
        }
    }

    public function downloadDocument(Complaint $manage_complaint)
    {
        // $path = storage_path(public/' . $manage_complaint->dokumen);
        // // dd($path);
        // return Response::make(file_get_contents($path), 200, [
        //     'Content-Type' => 'application/pdf',
        //     'Content-Disposition' => 'inline; filename="my-pdf-file.pdf"',
        // ]);
        // return response()->file($path);
        // {{ link_to_asset('files/file.pdf', 'Open the pdf!') }}
//         $path = storage_path('app/public/' . $manage_complaint->dokumen);
//         $fileContents = Storage::get($path);

//         return response()->download('/path/to/pdf.pdf')->withHeaders([
//     'Content-Disposition' => 'attachment; filename="your-custom-filename.pdf"',
// ]);
        $path = storage_path('app/public/' . $manage_complaint->dokumen);

        return response()->download($path);

    }

    public function viewDocument(Complaint $manage_complaint)
    {
        $path = storage_path('app/public/' . $manage_complaint->dokumen);

        return response()->file($path);

    }
}
