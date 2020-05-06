<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course_date');
            //primary and foreign keys
            $table->integer('teacher_id')->unsigned();
            $table->foreign('teacher_id')->references('staff_id')->on('staff');
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
        Schema::dropIfExists('teacher_courses');
    }
}
