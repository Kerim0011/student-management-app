<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Student;
use Illuminate\View\View;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'age' => 'required|integer|min:18',
        ]);

        // Create the new student record
        Student::create($request->all());

        // Redirect to the students index page after successfully saving the student
        return redirect()->route('students.index')->with('success', 'Student added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'age' => 'required|integer|min:18',
        ]);

        // Find the student by ID and update the record
        $student = Student::findOrFail($id);
        $student->update($request->all());

        // Redirect to the students index page after successfully updating the student
        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        // Find the student by ID and delete it
        $student = Student::findOrFail($id);
        $student->delete();

        // Redirect to the students index page after successfully deleting the student
        return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
    }
}
