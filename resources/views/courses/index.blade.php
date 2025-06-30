@extends('layout')

@section('content')
    <div class="container">
        <h3 class="mt-5 mb-4 text-center">Courses</h3>

        <!-- Display success message if exists -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Button to Add New Course -->
        <div class="row mb-4">
            <div class="col-md-12 text-center">
                <a href="{{ route('courses.create') }}" class="btn btn-success">Add New Course</a>
            </div>
        </div>

        <!-- Course Table -->
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Course Name</th>
                                <th>Syllabus</th>
                                <th>Duration</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $key => $course)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $course->name }}</td>
                                    <td>{{ $course->syllabus }}</td>
                                    <td>{{ $course->duration }}</td>
                                    <td>
                                        <!-- Edit button -->
                                        <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        <!-- Delete button -->
                                        <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this course?')">
                                                <i class="fa fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
