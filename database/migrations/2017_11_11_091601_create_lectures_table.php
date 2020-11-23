<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lectures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('departemen')->nullable();
            $table->string('subject');
            $table->string('class_id');
            $table->foreign('class_id')->references('id')->on('class_of_schools');
            $table->integer('section_id')->references('id')->on('class_sections');
            $table->string('class_id')->references('id')->on('class_of_schools');
            $table->integer('section_id')->references('id')->on('class_sections');
            $table->integer('section_id');
            $table->integer('teacher_id');
            $table->string('lecture_file');
            $table->tinyInteger('published_status')->default(1);
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
        Schema::dropIfExists('lectures');
    }
}
