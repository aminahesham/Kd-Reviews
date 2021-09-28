<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Movies_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //

        DB::table('movies')->insert([

            'name'     => 'The call ',
            'rate'     => '9',
            'photo'    => 'https://aradramtv.com/wp-content/uploads/photo1264753.jpg',
            'story'    => 'The Call ; It is a 2020 South Korean movie, adapted from the 2011 British movie The Call, written by Sergio Cassie, and shown on Netflix on',
            'cast'     => 'park shin hye , jeon jeong seo',
            'country'  => 'south korea',
            'year'     => '2020',
            'type'     => 'action/fantasy',
            'classification' => '18',
        ]);
    }
}
