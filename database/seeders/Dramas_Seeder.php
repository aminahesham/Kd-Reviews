<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Dramas_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //use Illuminate\Support\Facades\DB;

        DB::table('dramas')->insert([

            'name'     => 'The Devil Judge ',
            'rate'     => '10',
            'photo'    => 'The Devil Judge - Wikipediaen.wikipedia.org',
            'story'    => 'the devil is judge',
            'cast'     => 'Jee Song , Park Jen Yeong , Kim Hana',
        ]);
    }
}
