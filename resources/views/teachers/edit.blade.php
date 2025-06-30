{{-- resources/views/teachers/edit.blade.php --}}
@extends('layout')

@section('content')
    <div class="container">
        <h3 class="mt-5 mb-4 text-center">Edit Teacher</h3>

        <form action="{{ route('teachers.update', $teacher->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $teacher->first_name }}" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $teacher->last_name }}" required>
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" class="form-control" id="age" name="age" value="{{ $teacher->age }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Teacher</button>
        </form>
    </div>
@endsection
