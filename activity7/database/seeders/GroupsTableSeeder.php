<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insertar datos en la tabla groups
        DB::table('groups')->insert([
            [
                'GroupName' => 'beginner',
                'course_id' => 1,
            ],
            [
                'GroupName' => 'intermediate',
                'course_id' => 2, 
            ],
            [
                'GroupName' => 'advanced',
                'course_id' => 3, 
            ],
            [
                'GroupName' => 'intermediate',
                'course_id' => 4, 
            ],
            [
                'GroupName' => 'beginner',
                'course_id' => 4,
            ],
            [
                'GroupName' => 'advanced',
                'course_id' => 3,
            ],
            [
                'GroupName' => 'beginner',
                'course_id' => 2,
            ],
            [
                'GroupName' => 'intermediate',
                'course_id' => 1,
            ],
           
        ]);
    }
}

