<?php
// app/Http/Controllers/TeacherController.php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }

    public function create()
    {
        return view('teachers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'age' => 'required|integer',
        ]);

        Teacher::create($validated);

        return redirect()->route('teachers.index')->with('success', 'Teacher added successfully.');
    }

    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.edit', compact('teacher'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'age' => 'required|integer',
        ]);

        $teacher = Teacher::findOrFail($id);
        $teacher->update($validated);

        return redirect()->route('teachers.index')->with('success', 'Teacher updated successfully.');
    }

    public function destroy($id)
    {
        Teacher::findOrFail($id)->delete();

        return redirect()->route('teachers.index')->with('success', 'Teacher deleted successfully.');
    }
}
