{{-- resources/views/teachers/index.blade.php --}}
@extends('layout')

@section('content')
    <div class="container">
        <h3 class="mt-5 mb-4 text-center">Teacher Management</h3>

        <!-- Display success message if exists -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Button to Add New Teacher -->
        <div class="row mb-4">
            <div class="col-md-12 text-center">
                <a href="{{ route('teachers.create') }}" class="btn btn-success">Add New Teacher</a>
            </div>
        </div>

        <!-- Teacher Table -->
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Age</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teachers as $key => $teacher)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $teacher->first_name }}</td>
                                    <td>{{ $teacher->last_name }}</td>
                                    <td>{{ $teacher->age }}</td>
                                    <td>
                                        <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this teacher?')">
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
