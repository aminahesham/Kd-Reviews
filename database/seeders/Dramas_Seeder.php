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
            'photo'    => 'https://www.anime-internet.com/content/images/2021/08/65565f78f1c7455b8e5e2b4658b56fe6-1.jpeg',
            'story'    => 'During a time of chaos, a judge turns the court into something like a reality show and punishes evil people mercilessly.

            Kang Yo-Han (Ji Sung) is a judge. He has an aristocratic appearance and elegant taste. He punishes corrupt and greedy men with power. Kang Yo-Han a secret.',
            'cast'     => 'parl jee sung , park jin yung',
            'country'  => 'south korea',
            'year'     => '2021',
            'type'     => 'action/suspense',
            'classification' => '15',
        ]);
        
    }
}
