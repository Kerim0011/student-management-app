@extends('layout')

@section('content')
    <div class="container">
        <h3 class="mt-5 mb-4 text-center">Student Management</h3>

        <!-- Display success message if exists -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Button to Add New Student -->
        <div class="row mb-4">
            <div class="col-md-12 text-center">
                <a href="{{ route('students.create') }}" class="btn btn-success">Add New Student</a>
            </div>
        </div>

        <!-- Student Table -->
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
                            @foreach ($students as $key => $student)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->surname }}</td>
                                    <td>{{ $student->age }}</td>
                                    <td>
                                        <!-- Edit button -->
                                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        <!-- Delete button -->
                                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this student?')">
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

@push('css')
    <style>
        .table {
            margin-top: 20px;
        }

        .table th, .table td {
            vertical-align: middle;
        }

        .btn {
            margin-right: 5px;
        }

        .fa-edit, .fa-trash {
            margin-right: 5px;
        }

        .table-responsive {
            overflow-x: auto;
        }

        .alert {
            margin-top: 20px;
        }

        /* Optional - Style for the Add New Student button */
        .btn-success {
            font-size: 16px;
            padding: 8px 20px;
        }

        /* Optional - Table row hover effect */
        .table tbody tr:hover {
            background-color: #f9f9f9;
        }
    </style>
@endpush
