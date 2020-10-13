<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { \Illuminate\Support\Facades\DB::table('users')->insert([
        ['name' => 'admin',
            'email' => 'admin@gmail.com',
            'user_type' => 'admin',
            'status' => 'active',
            'password' => bcrypt('admin123')],

        ['name' => 'doctor',
            'email' => 'doctor@gmail.com',
            'user_type' => 'doctors',
            'status' => 'active',
            'password' => bcrypt('doctor123')],

        ['name' => 'staff',
            'email' => 'staff@gmail.com',
            'user_type' => 'staff',
            'status' => 'active',
            'password' => bcrypt('staff123')],

            ['name' => 'patient',
            'email' => 'user@patient.com',
            'user_type' => 'patient',
            'status' => 'active',
            'password' => bcrypt('patient123')],
    ]);
    }
}
