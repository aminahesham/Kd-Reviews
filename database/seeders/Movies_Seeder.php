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

            'name'     => 'Midnight ',
            'rate'     => '9.5',
            'photo'    => 'https://awsimages.detik.net.id/community/media/visual/2021/06/30/7-fakta-film-korea-midnight-kisah-tunarungu-dikejar-pembunuh-berantai.jpeg?w=900',
            'story'    => 'A game of hide and seek in which Kyung Mi and her mother, who suffer from a deaf and dumb disability, struggle to escape from a deranged killer who aims to kill them after their intervention to save a girl from murder.',
            'cast'     => 'jin ko joo , wi ha joon',
            'country'  => 'south korea',
            'year'     => '2021',
            'type'     => 'action/suspense',
            'classification' => '15',
        ]);
    }
}
