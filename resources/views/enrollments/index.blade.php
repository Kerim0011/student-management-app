@extends('layout')

@section('content')
    <div class="container">
        <h3 class="mt-5 mb-4 text-center">All Enrollments</h3>

        <a href="{{ route('enrollments.create') }}" class="btn btn-primary mb-3">Add New Enrollment</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Enroll No</th>
                    <th>Student Name</th>
                    <th>Join Date</th>
                    <th>Fee</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($enrollments as $enrollment)
                    <tr>
                        <td>{{ $enrollment->enroll_no }}</td>
                        <td>{{ $enrollment->student->name }}</td>
                        <td>{{ $enrollment->join_date }}</td>
                        <td>{{ $enrollment->fee }}</td>
                        <td>
                            <a href="{{ route('enrollments.edit', $enrollment->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('enrollments.destroy', $enrollment->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
