<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate; 
use Exception;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Check for permission (optional, but good practice)
        // Gate::authorize('majors.view');

        $majors = Major::paginate(10); // Paginate the results
        return view('majors.index', compact('majors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Gate::authorize('create-majors');

        return view('majors.create');
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
            'name' => 'required|string|max:255',
            'duration' => 'required|integer',
            'duration_type' => 'required|string',
            'description' => 'nullable|string',
            // 'status' => 'boolean',
        ]);
        
        Major::create($validatedData);

        return redirect()->route('majors.index')
                         ->with('success', 'Major created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function show(Major $major)
    {
        // Gate::authorize('view-majors');

        return view('majors.show', compact('major'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function edit(Major $major)
    {
        // Gate::authorize('edit-majors');
        
        return view('majors.edit', compact('major'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Major $major)
    {
        // Gate::authorize('edit-majors');

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'duration' => 'required|integer',
            'duration_type' => 'required|string',
            'description' => 'nullable|string',
            // 'status' => 'boolean',
        ]);

        $major->update($validatedData);

        return redirect()->route('majors.index')
                         ->with('success', 'Major updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function destroy(Major $major)
    {
        // Gate::authorize('delete-majors');

        $major->delete();

        return redirect()->route('majors.index')
                         ->with('success', 'Major deleted successfully.');
    }
}
