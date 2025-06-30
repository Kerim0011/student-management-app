@extends('layout')

@section('content')
    <div class="container">
        <h3 class="mt-5 mb-4 text-center">Enrollment Details</h3>

        <div class="form-group">
            <label for="enroll_no">Enrollment Number</label>
            <p>{{ $enrollment->enroll_no }}</p>
        </div>

        <div class="form-group">
            <label for="student_name">Student Name</label>
            <p>{{ $enrollment->student->name }}</p>
        </div>

        <div class="form-group">
            <label for="join_date">Join Date</label>
            <p>{{ $enrollment->join_date }}</p>
        </div>

        <div class="form-group">
            <label for="fee">Fee</label>
            <p>{{ $enrollment->fee }}</p>
        </div>

        <a href="{{ route('enrollments.index') }}" class="btn btn-primary">Back to Enrollments</a>
    </div>
@endsection
