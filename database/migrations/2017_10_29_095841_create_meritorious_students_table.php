<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeritoriousStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meritorious_students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('session_year');
            $table->string('result_year');
            $table->string('previous_class_id');
            $table->string('running_class_id');
            $table->string('result_place');
            $table->string('grate_point')->nullable();
            $table->string('total_number')->nullable();
            $table->string('gender');
            $table->string('religion');
            $table->text('address')->nullable();
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
        Schema::dropIfExists('meritorious_students');
    }
}
