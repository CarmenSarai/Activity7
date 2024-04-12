<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Agrega esta línea para importar la clase DB

class GroupsCoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('groups_courses')->insert([
            [
                'groups_id' => 9,
                'course_id' => 1,
            ],
            [
                'groups_id' => 10,
                'course_id' => 2,
            ],
            [
                'groups_id' => 11,
                'course_id' => 3,
            ],
            [
                'groups_id' => 12,
                'course_id' => 4,
            ],
            [
                'groups_id' => 13,
                'course_id' => 2,
            ],
            [
                'groups_id' => 14,
                'course_id' => 3,
            ],
            [
                'groups_id' => 15,
                'course_id' => 4,
            ],
            [
                'groups_id' => 15,
                'course_id' => 1,
            ],
          
        ]);
    }
    
}



