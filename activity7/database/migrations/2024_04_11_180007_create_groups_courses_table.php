<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups_courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('groups_id'); 
            $table->foreign('groups_id')->references('id')->on('groups');

            $table->unsignedBigInteger('course_id'); 
            $table->foreign('course_id')->references('id')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      
    }
}
