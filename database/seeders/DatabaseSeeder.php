<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Enrollment;

class DatabaseSeeder extends Seeder
{
    public function run()
    {

        $teacher = Teacher::create(['first_name' => 'John', 'last_name' => 'Doe', 'age' => 40]);


        $course1 = Course::create(['name' => 'Mathematics', 'syllabus' => 'Math Syllabus', 'duration' => 6, 'teacher_id' => $teacher->id]);
        $course2 = Course::create(['name' => 'Science', 'syllabus' => 'Science Syllabus', 'duration' => 4, 'teacher_id' => $teacher->id]);


        $student1 = Student::create(['name' => 'Alice', 'surname' => 'Smith', 'age' => 20]);
        $student2 = Student::create(['name' => 'Bob', 'surname' => 'Jones', 'age' => 22]);


        Enrollment::create(['enroll_no' => 'E001', 'student_id' => $student1->id, 'course_id' => $course1->id, 'join_date' => now(), 'fee' => 1000]);
        Enrollment::create(['enroll_no' => 'E002', 'student_id' => $student2->id, 'course_id' => $course1->id, 'join_date' => now(), 'fee' => 1000]);
        Enrollment::create(['enroll_no' => 'E003', 'student_id' => $student1->id, 'course_id' => $course2->id, 'join_date' => now(), 'fee' => 1200]);
    }
}
