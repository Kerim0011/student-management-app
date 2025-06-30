<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Display a list of all courses
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    // Show the form to create a new course
    public function create()
    {
        return view('courses.create');
    }

    // Store a new course in the database
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'syllabus' => 'required|string',
        'duration' => 'required|string',
    ]);

    // Append "months" to the duration field
    $data = $request->all();
    $data['duration'] .= " months";

    Course::create($data);

    return redirect()->route('courses.index')->with('success', 'Course created successfully!');}

    // Show the form to edit an existing course
    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    // Update the course in the database
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'syllabus' => 'required|string',
            'duration' => 'required|string',
        ]);

        $course->update($request->all());

        return redirect()->route('courses.index')->with('success', 'Course updated successfully!');
    }

    // Delete a course from the database
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Course deleted successfully!');
    }
}
