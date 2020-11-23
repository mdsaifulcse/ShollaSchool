<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('guardian_mobile')->nullable();
            $table->string('gender');
            $table->string('religion');
            $table->string('birth_reg_number')->nullable();
            $table->string('village')->nullable();
            $table->string('post_office')->nullable();
            $table->string('thana')->nullable();
            $table->string('district')->nullable();
            $table->string('student_as');
            $table->string('student_id')->nullable();
            $table->string('student_roll')->nullable();
            $table->string('class_id');
            $table->string('class_id')->references('id')->on('class_of_schools');
            $table->integer('section_id')->references('id')->on('class_sections');
            $table->string('study_group')->nullable();
            $table->string('session_year')->nullable();
            $table->string('student_image');
            $table->tinyInteger('published_status');
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
        Schema::dropIfExists('students');
    }
}
