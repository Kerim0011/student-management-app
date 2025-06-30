<?php
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;

Route::resource('enrollments', EnrollmentController::class);
Route::resource('courses', CourseController::class);
// Route for the home page (layout)
Route::get('/', function () {
    return view('layout');
})->name('home');

// Route for the students index page
Route::get('/students', [StudentController::class, 'index'])->name('students.index');

// Resource route for the student resource (handles create, store, edit, update, destroy, etc.)
Route::resource('/students', StudentController::class)->except(['index']);  // Exclude 'index' since we already have it
Route::get('/home', function () {
    return view('home'); // Ensure you have a view called home.blade.php
})->name('students.home');
Route::get('/home', [HomeController::class, 'index'])->name('students.home');




Route::resource('teachers', TeacherController::class);
