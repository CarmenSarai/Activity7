<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insertar datos en la tabla roles
        DB::table('roles')->insert([
            [
                'RolName' => 'student',
                'permissions' => 'watch course content',
            ],
            [
                'RolName' => 'teacher',
                'permissions' => 'edit grades',
            ],
            [
                'RolName' => 'teacher',
                'permissions' => 'watch course content',
            ],
            [
                'RolName' => 'administrator',
                'permissions' => 'all',
            ],
        ]);
    }
}