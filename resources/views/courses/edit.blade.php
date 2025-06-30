@extends('layout')

@section('content')
    <div class="container">
        <h3 class="mt-5 mb-4 text-center">Edit Course</h3>

        <!-- Form for editing an existing course -->
        <form action="{{ route('courses.update', $course->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Course Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $course->name }}" required>
            </div>
            <div class="form-group">
                <label for="syllabus">Syllabus</label>
                <textarea class="form-control" id="syllabus" name="syllabus" required>{{ $course->syllabus }}</textarea>
            </div>
            <div class="form-group">
                <label for="duration">Duration</label>
                <input type="text" class="form-control" id="duration" name="duration" value="{{ $course->duration }}" required>
            </div>
            <button type="submit" class="btn btn-success">Update Course</button>
        </form>
    </div>
@endsection
