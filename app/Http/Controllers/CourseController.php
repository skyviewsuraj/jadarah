<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Course::with('major');
        if ($request->has('search') && $request->search != '') {
            $searchTerm = $request->search;
            $query->where('name', 'like', '%' . $searchTerm . '%')
                ->orWhere('code', 'like', '%' . $searchTerm . '%')
                ->orWhere('prerequisite', 'like', '%' . $searchTerm . '%')
                ->orWhereHas('major', function ($q) use ($searchTerm) {
                    $q->where('name', 'like', '%' . $searchTerm . '%');
                });
        }
        $courses = $query->latest()->paginate(10);
        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $majors = Major::where('status',1)->get();
        $courses = Course::where('status',1)->get(); 
        return view('courses.create', compact('majors', 'courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'major_id' => ['required', 'exists:majors,id'],
            'code' => ['required', 'string', 'unique:courses,code', 'max:255', 'regex:/^[A-Z0-9\-]+$/i'],
            'name' => ['required', 'string', 'max:255'],
            'prerequisite' => ['nullable', 'string', 'max:255', 'exists:courses,code'],
            'type' => ['required', Rule::in(['mandated', 'elective'])],
            'credits_hours' => ['required', 'integer', 'min:1'],
        ]);

        Course::create($validatedData);

        return redirect()->route('courses.index')
                         ->with('success', 'Course created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        $course->load('major');
        return view('courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        $majors = Major::where('status',1)->get();
        $courses = Course::where('status',1)->get();
        return view('courses.edit', compact('course', 'majors', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $validatedData = $request->validate([
            'major_id' => ['required', 'exists:majors,id'],
            'code' => ['required', 'string', Rule::unique('courses')->ignore($course->id), 'max:255', 'regex:/^[A-Z0-9\-]+$/i'],
            'name' => ['required', 'string', 'max:255'],
            'prerequisite' => ['nullable', 'string', 'max:255', 'exists:courses,code'],
            'type' => ['required', Rule::in(['mandated', 'elective'])],
            'credits_hours' => ['required', 'integer', 'min:1'],
        ]);

        $course->update($validatedData);

        return redirect()->route('courses.index')
                         ->with('success', 'Course updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('courses.index')
                         ->with('success', 'Course deleted successfully.');
    }
}
