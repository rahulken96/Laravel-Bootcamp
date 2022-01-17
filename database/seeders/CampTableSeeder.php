<?php

namespace Database\Seeders;

use App\Models\Camp;
use Illuminate\Database\Seeder;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Si Hobi Explorer',
                'slug' => 'si-hobi-explorer',
                'price' => 50000,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time())
            ],
            [
                'title' => 'Keberuntungan Pemula',
                'slug' => 'keberuntungan-pemula',
                'price' => 25000,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time())
            ],

        ];

        //Cara Ke - 1
        /* foreach ($camps as $key => $camp) {
            Camp::create($camp);
        } */
        
        //Cara Ke - 2
        Camp::insert($camps);
        /* NB: Menggunakan metode ini dapat mengakibatkan created_at dan updated_at bisa tidak terdefinisi,
            jika tidak memasukkan nilai nya terlebih dahulu..
        */


    }
}
