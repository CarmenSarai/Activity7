<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insertar datos en la tabla students
        DB::table('students')->insert([
            [
                'StudentName' => 'John Doe',
                'users_id' => 1,
                'groups_id' => 9, 
            ],
            [
                'StudentName' => 'Jane Smith',
                'users_id' => 3, 
                'groups_id' => 9, 
            ],
            [
                'StudentName' => 'David Johnson',
                'users_id' => 4, 
                'groups_id' => 9, 
            ],
        ]);
    }
}
