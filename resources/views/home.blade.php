@extends('layout')

@section('content')
<div class="container">
    <!-- Welcome Section -->
    <div class="row text-center">
        <div class="col-md-12">
            <h1 class="display-4 mb-4">Welcome to the Student Management System</h1>
            <p class="lead">Manage students, teachers, enrollments, courses, and payments all in one place. Our platform makes educational administration simple and efficient.</p>
        </div>
    </div>

    <!-- Features Section -->
    <div class="row mb-5">
        <div class="col-md-4">
            <div class="feature-box">
                <h3 class="mt-3">Student Management</h3>
                <p>Effortlessly manage student records, including personal information, academic performance, and course enrollments. Keep track of every detail to ensure smooth administration.</p>
                <a href="{{ route('students.index') }}" class="btn btn-primary">View Students</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-box">
                <h3 class="mt-3">Teacher Management</h3>
                <p>Track teacher profiles, schedules, courses taught, and performance. Ensure that your educators have all the tools they need to deliver quality education.</p>
                <a href="#teacher" class="btn btn-primary">View Teachers</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-box">
                <h3 class="mt-3">Course Management</h3>
                <p>Manage course offerings, assign instructors, and track student enrollments. Streamline the process of setting up and maintaining your curriculum.</p>
                <a href="#courses" class="btn btn-primary">View Courses</a>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div class="row">
        <div class="col-md-12">
            <div class="about-box">
                <h2>About Us</h2>
                <p>Our Student Management System is designed to make educational administration easier and more effective. Whether you're an administrator, teacher, or student, our platform helps you manage all your tasks with ease.</p>
                <p>From student registration and course management to teacher schedules and payment tracking, we provide a centralized platform that simplifies the day-to-day activities of educational institutions.</p>
            </div>
        </div>
    </div>

</div>
@endsection

@push('css')
<style>
    /* Welcome Section */
    .text-center {
        text-align: center;
    }

    .display-4 {
        font-size: 3.5rem;
        color: #343a40;
    }

    .lead {
        font-size: 1.25rem;
        font-weight: 300;
        color: #6c757d;
    }

    /* Feature Boxes */
    .feature-box {
        background-color: #f9f9f9;
        padding: 20px;
        text-align: center;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
    }

    .feature-box h3 {
        font-size: 1.75rem;
        color: #343a40;
        margin-top: 20px;
    }

    .feature-box p {
        font-size: 1rem;
        color: #6c757d;
    }

    /* About Section */
    .about-box {
        padding: 20px;
        background-color: #e9ecef;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-top: 40px;
    }

    .about-box h2 {
        font-size: 2rem;
        color: #343a40;
        margin-bottom: 20px;
    }

    .about-box p {
        font-size: 1rem;
        color: #6c757d;
        line-height: 1.6;
    }

    /* Buttons */
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        padding: 10px 20px;
        text-decoration: none;
        color: white;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    /* Section spacing */
    .row {
        margin-bottom: 40px;
    }
</style>
@endpush
