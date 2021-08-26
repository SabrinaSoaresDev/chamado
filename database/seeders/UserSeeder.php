<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert ([
            'name'=> 'Sabrina Soares',
            'email'=> 'sabrinams9.ss@gmail.com',
            'password'=>bcrypt('123456789'),
            'company_id'=> 1
        ]);
    }
}
