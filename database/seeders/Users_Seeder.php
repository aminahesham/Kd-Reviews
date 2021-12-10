<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Users_Seeder extends Seeder
{
    
    public function run()
    {
        //
        DB::table('users')->insert([

            'name'     =>' menna',
            'email'    => 'menna@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        DB::table('users')->insert([

            'name'     =>' roma',
            'email'    => 'roma@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        DB::table('users')->insert([

            'name'     =>' memo',
            'email'    => 'memo@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
