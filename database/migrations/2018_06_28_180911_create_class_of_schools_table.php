<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassOfSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_of_schools', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('class_of',false,1)->comment('1=School, 2=College');
            $table->string('class_name',100);
            $table->text('details')->nullable();
            $table->tinyInteger('status',false,1)->default(1);
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
        Schema::dropIfExists('class_of_schools');
    }
}
