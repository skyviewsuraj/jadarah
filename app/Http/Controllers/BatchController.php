<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    
    public function index()
    {
        $batches = Batch::orderBy('year_start', 'desc')->paginate(10);
        return view('batches.index', compact('batches'));
    }

    public function create()
    {
        return view('batches.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'year_start' => 'required|integer',
        ]);
        $batch = new Batch();
        $batch->year_start = $request->input('year_start');
        $batch->year_end = $request->input('year_end') ?? $batch->year_start + 4;
        $batch->save();
        return redirect()->route('batches.index')->with('success', 'Batch created successfully!');
    }

    public function show(Batch $batch)
    {
        return view('batches.show', compact('batch'));
    }

    public function edit(Batch $batch)
    {
        return view('batches.edit', compact('batch'));
    }
    public function update(Request $request, Batch $batch)
    {
        $request->validate([
            'year_start' => 'required|integer',
        ]);
        $batch->year_start = $request->input('year_start');
        $batch->year_end = $request->input('year_end') ?? $batch->year_start + 4;
        $batch->save();
        return redirect()->route('batches.index')->with('success', 'Batch updated successfully!');
    }
    public function destroy(Batch $batch)
    {
        $batch->delete();
        return redirect()->route('batches.index')->with('success', 'Batch deleted successfully!');
    }
}
