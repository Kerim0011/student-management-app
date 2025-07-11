<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="TE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Student Management System</title>
    <style>
        /* The side navigation menu */
        .sidebar {
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        /* Sidebar links */
        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }

        /* Remove the active link highlight (green background) */
        .sidebar a.active {
            background-color: transparent; /* Remove the background color */
            color: black; /* Keep the text color as black */
        }

        /* Links on mouse-over */
        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
        div.content {
            margin-left: 200px;
            padding: 1px 16px;
            height: 1000px;
        }

        /* On screens that are less than 700px wide, make the sidebar into a topbar */
        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            .sidebar a {float: left;}
            div.content {margin-left: 0;}
        }

        /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <!-- Link to Home page -->
                    <a class="navbar-brand" href="{{ route('students.home') }}"><h2>Student Management System</h2></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <!-- The sidebar -->
                <div class="sidebar">
                    <!-- Active link logic for Home (Highlight when on home route) -->
                    <a href="{{ route('students.home') }}" class="{{ request()->is('students') || request()->is('/') ? '' : '' }}">Home</a>
                    <a href="{{ route('students.index') }}" class="{{ request()->is('students') ? '' : '' }}">Student</a>
                    <a href="{{ route('teachers.index') }}">Teacher</a>
                    <a href="{{ route('enrollments.index') }}">Enrollment</a>
                    <a href="{{ route('courses.index') }}">Courses</a>
                    <a href="#payment">Payment</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>
</html>
