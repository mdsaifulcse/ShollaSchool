<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStuffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stuffs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('gender');
            $table->string('blood_group')->nullable();
            $table->string('religion');
            $table->string('mobile',11)->unique()->nullable();
            $table->string('email',100)->unique()->nullable();
            $table->string('stuff_type',120);
            $table->string('image',120)->nullable();
            $table->text('present_address')->nullable();
            $table->text('parmanent_address')->nullable();
            $table->tinyInteger('stuff_status');
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
        Schema::dropIfExists('stuffs');
    }
}
