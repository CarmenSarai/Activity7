<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insertar datos en la tabla users
        DB::table('users')->insert([
            [
                'Username' => 'user1',
                'password' => Hash::make('password1'),
                'roles_id' => 1,
            ],
            [
                'Username' => 'user2',
                'password' => Hash::make('password2'),
                'roles_id' => 2,
            ],
            [
                'Username' => 'user3',
                'password' => Hash::make('password3'),
                'roles_id' => 3,
            ],
            [
                'Username' => 'user4',
                'password' => Hash::make('password4'),
                'roles_id' => 1,
            ],
            [
                'Username' => 'user5',
                'password' => Hash::make('password5'),
                'roles_id' => 2,
            ],
            [
                'Username' => 'user6',
                'password' => Hash::make('password6'),
                'roles_id' => 3,
            ],
            [
                'Username' => 'user7',
                'password' => Hash::make('password7'),
                'roles_id' => 1,
            ],
            [
                'Username' => 'user8',
                'password' => Hash::make('password8'),
                'roles_id' => 2,
            ],
            [
                'Username' => 'user9',
                'password' => Hash::make('password9'),
                'roles_id' => 3,
            ],
            [
                'Username' => 'user10',
                'password' => Hash::make('password10'),
                'roles_id' => 1,
            ],
        ]);
    }
}

