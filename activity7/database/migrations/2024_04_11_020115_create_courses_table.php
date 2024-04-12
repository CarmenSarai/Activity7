<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->enum('CourseKey', ['Rob101', 'Rob102', 'Rob103', 'Rob104']);
            $table->enum('CourseName', ['Introduction to Robotics', 'Introduction to Automation', 'Programming for Robotics', 'Characteristics of a Robot']);
            $table->enum('RoboticsKit', ['StarterKit', 'Educational Robotics Kit', 'Kit5']);
           
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
