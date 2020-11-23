<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_educations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('teacher_id');
            $table->string('b_ed')->nullable();
            $table->string('bed_subject')->nullable();
            $table->string('bed_board')->nullable();
            $table->string('bed_result')->nullable();
            $table->date('bed_passing_year')->nullable();
            $table->string('masters')->nullable();
            $table->string('masters_subject')->nullable();
            $table->string('masters_board')->nullable();
            $table->string('masters_result')->nullable();
            $table->date('masters_passing_year')->nullable();
            $table->string('graduation')->nullable();
            $table->string('graduation_subject')->nullable();
            $table->string('graduation_board')->nullable();
            $table->string('graduation_result')->nullable();
            $table->date('graduation_passing_year')->nullable();
            $table->string('hsc');
            $table->string('hsc_group');
            $table->string('hsc_board');
            $table->string('hsc_result');
            $table->date('hsc_passing_year')->nullable();
            $table->string('ssc');
            $table->string('ssc_group');
            $table->string('ssc_board');
            $table->string('ssc_result');
            $table->date('ssc_passing_year')->nullable();
            $table->string('designation');
            $table->string('special_in')->nullable();
            $table->string('teacher_type');
            $table->date('join_date')->nullable();
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
        Schema::dropIfExists('teacher_educations');
    }
}
