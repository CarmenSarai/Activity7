<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insertar datos en la tabla courses
        DB::table('courses')->insert([
            [
                'CourseKey' => 'Rob101',
                'CourseName' => 'Introduction to Robotics',
                'RoboticsKit' => 'StarterKit',
            ],
            [
                'CourseKey' => 'Rob102',
                'CourseName' => 'Introduction to Automation',
                'RoboticsKit' => 'StarterKit',
            ],
            [
                'CourseKey' => 'Rob103',
                'CourseName' => 'Programming for Robotics',
                'RoboticsKit' => 'Educational Robotics Kit',
            ],
            [
                'CourseKey' => 'Rob104',
                'CourseName' => 'Characteristics of a Robot',
                'RoboticsKit' => 'Kit5',
            ],
        ]);
    }
}
