<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('grade');
            //primary and foreign keys
            $table->integer('Student_id')->unsigned();
            $table->foreign('Student_id')->references('id')->on('users');
            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')->references('course_id')->on('courses');
            //end primary and foreign keys
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
