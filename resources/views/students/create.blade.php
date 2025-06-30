@extends('layout')

@section('content')
    <div class="container">
        <h3 class="mt-5 mb-4 text-center">Add New Student</h3>

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

        <!-- Add Student Form -->
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form method="POST" action="{{ route('students.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">First Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="surname">Last Name</label>
                        <input type="text" id="surname" name="surname" class="form-control" value="{{ old('surname') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="number" id="age" name="age" class="form-control" value="{{ old('age') }}" required>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Save Student</button>
                        <a href="{{ route('students.index') }}" class="btn btn-secondary ml-2">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
