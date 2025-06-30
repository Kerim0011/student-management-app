<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Student;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    // Show all enrollments
    public function index()
    {
        $enrollments = Enrollment::all();
        return view('enrollments.index', compact('enrollments'));
    }

    // Show form to create a new enrollment
    public function create()
    {
        $students = Student::all();  // Get all students for the dropdown
        return view('enrollments.create', compact('students'));
    }

    // Store new enrollment
    public function store(Request $request)
    {
        $request->validate([
            'enroll_no' => 'required|string|max:255',
            'student_id' => 'required|exists:students,id',
            'join_date' => 'required|date',
            'fee' => 'required|numeric',
        ]);

        Enrollment::create($request->all());

        return redirect()->route('enrollments.index')->with('success', 'Enrollment created successfully!');
    }

    // Show form to edit an enrollment
    public function edit(Enrollment $enrollment)
    {
        $students = Student::all();  // Get all students for the dropdown
        return view('enrollments.edit', compact('enrollment', 'students'));
    }

    // Update an enrollment
    public function update(Request $request, Enrollment $enrollment)
    {
        $request->validate([
            'enroll_no' => 'required|string|max:255',
            'student_id' => 'required|exists:students,id',
            'join_date' => 'required|date',
            'fee' => 'required|numeric',
        ]);

        $enrollment->update($request->all());

        return redirect()->route('enrollments.index')->with('success', 'Enrollment updated successfully!');
    }

    // Delete an enrollment
    public function destroy(Enrollment $enrollment)
    {
        $enrollment->delete();
        return redirect()->route('enrollments.index')->with('success', 'Enrollment deleted successfully!');
    }
}
