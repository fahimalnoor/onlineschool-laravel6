<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course_id');
            $table->string('course_name')->nullable();
            $table->string('student_name');
            $table->string('student_id');
            $table->string('teacher_name')->nullable();
            $table->string('teacher_id')->nullable();
            $table->string('course_grade')->nullable();
            $table->boolean('course_valid')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_courses');
    }
}
