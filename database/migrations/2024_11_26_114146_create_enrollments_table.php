<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->string('enroll_no');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('course_id'); // New column
            $table->date('join_date');
            $table->double('fee');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade'); // Foreign key for course
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
