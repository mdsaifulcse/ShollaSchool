<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('gender');
            $table->string('blood_group')->nullable();
            $table->string('religion');
            $table->string('marital_status');
            $table->string('mobile',11)->unique();
            $table->string('administrator_type',20);
            $table->integer('designation_id',false,10);
            $table->foreign('designation_id')->references('id')->on('designations');
            $table->string('education',20);
            $table->string('email',100)->unique()->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('image');
            $table->tinyInteger('aministrator_status');
            $table->text('present_address')->nullable();
            $table->text('parmanent_address');
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
        Schema::dropIfExists('administrators');
    }
}
