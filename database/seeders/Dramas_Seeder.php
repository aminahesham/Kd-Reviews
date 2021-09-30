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

            'name'     => 'Taxi Driver',
            'rate'     => '10',
            'photo'    => 'https://6.vikiplatform.com/image/f2a54a3950d143dcb75975981048bb35.jpg?x=b&a=0x0',
            'story'    => 'هذه الدراما مبنية على القصة المصورة “موبوماتاكسي“ من تأليف كارلوس ورسم لي جاي جين والتي تم نشرها عبر موقع نافر. كيم دو كي خريج الأكاديمية البحرية الكورية ، قُتلت والدته عندما كان صغيراً ويعمل الآن كسائق تاكسي لشركة تقدم خدمة “دعوة للانتقام“ لعملائها.',
            'cast'     => 'Lee Jee Hoon , esom ',
        ]);
    }
}
