@extends('layout')

@section('content')
    <div class="container">
        <h3 class="mt-5 mb-4 text-center">Add New Course</h3>

        <!-- Form for adding a new course -->
        <form action="{{ route('courses.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Course Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="syllabus">Syllabus</label>
                <textarea class="form-control" id="syllabus" name="syllabus" required></textarea>
            </div>
            <div class="form-group">
                <label for="duration">Duration</label>
                <input type="text" class="form-control" id="duration" name="duration" required>
            </div>
            <button type="submit" class="btn btn-success">Save Course</button>
        </form>
    </div>
@endsection
