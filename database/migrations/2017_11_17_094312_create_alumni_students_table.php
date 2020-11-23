<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumniStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni_students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('university',100);
            $table->string('profession',100);
            $table->string('mobile',11);
            $table->string('email',100)->nullable();
            $table->string('blood_group',10)->nullable();
            $table->string('education',30);
            $table->string('image');
            $table->tinyInteger('published_status');
            $table->text('present_address')->nullable();
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
        Schema::dropIfExists('alumni_students');
    }
}
