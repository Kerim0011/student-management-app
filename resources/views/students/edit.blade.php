@extends('layout')

@section('content')
    <div class="container">
        <h3 class="mt-5 mb-4 text-center">Edit Student</h3>

        <!-- Display errors if any -->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Edit Student Form -->
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form method="POST" action="{{ route('students.update', $student->id) }}">
                    @csrf
                    @method('PUT') <!-- This is important to use the PUT method for updating -->

                    <div class="form-group">
                        <label for="name">First Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $student->name) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="surname">Last Name</label>
                        <input type="text" id="surname" name="surname" class="form-control" value="{{ old('surname', $student->surname) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="number" id="age" name="age" class="form-control" value="{{ old('age', $student->age) }}" required>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Update Student</button>
                        <a href="{{ route('students.index') }}" class="btn btn-secondary ml-2">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
