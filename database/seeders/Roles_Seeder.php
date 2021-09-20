<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Roles_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([
            'name'         => 'normal_user',
            'display_name' => 'normal user',
            'description'  => 'user can rate dramas and view reviews about dramas and movies',
        ]);

        DB::table('roles')->insert([
            'name'         => 'admin',
            'display_name' => 'admin',
            'description'  => 'can display dashboard , add posts , add review about dramas and movies',
        ]);

        DB::table('roles')->insert([
            'name'         => 'super_admin',
            'display_name' => 'super admin',
            'description'  => 'can give roles to users and admins',
        ]);
    }
}
