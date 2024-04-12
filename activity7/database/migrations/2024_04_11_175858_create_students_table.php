<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('StudentName');


            $table->unsignedBigInteger('users_id'); // Cambié de 'Course' a 'course_id'
            $table->foreign('users_id')->references('id')->on('users');
            
            $table->unsignedBigInteger('groups_id'); 
            $table->foreign('groups_id')->references('id')->on('groups');
           
          
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
