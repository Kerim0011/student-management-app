@extends('layout')

@section('content')
    <div class="container">
        <h3 class="mt-5 mb-4 text-center">Edit Enrollment</h3>

        <form action="{{ route('enrollments.update', $enrollment->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="enroll_no">Enrollment Number</label>
                <input type="text" class="form-control" id="enroll_no" name="enroll_no" value="{{ $enrollment->enroll_no }}" required>
            </div>
            <div class="form-group">
                <label for="student_id">Student</label>
                <select class="form-control" id="student_id" name="student_id" required>
                    @foreach($students as $student)
                        <option value="{{ $student->id }}" {{ $enrollment->student_id == $student->id ? 'selected' : '' }}>{{ $student->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="join_date">Join Date</label>
                <input type="date" class="form-control" id="join_date" name="join_date" value="{{ $enrollment->join_date }}" required>
            </div>
            <div class="form-group">
                <label for="fee">Fee</label>
                <input type="number" class="form-control" id="fee" name="fee" value="{{ $enrollment->fee }}" required>
            </div>
            <button type="submit" class="btn btn-success">Update Enrollment</button>
        </form>
    </div>
@endsection
