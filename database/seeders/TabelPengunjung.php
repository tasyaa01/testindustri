<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class TabelPengunjung extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            ['id_pengunjung'=> 'BBH06',
            'nm_pengunjung'=> 'Kasih',
            'alamat'=> 'Jakarta',
            'jk'=> 'Wanita',
            'no_tlpn'=> '0895312560', 
            'no_ktp'=> 123456789],

            ['id_pengunjung'=> 'HJ20',
            'nm_pengunjung'=> 'Khimey',
            'alamat'=> 'Bandung',
            'jk'=> 'Wanita',
            'no_tlpn'=> '0813978854', 
            'no_ktp'=> 987654321],

            ['id_pengunjung'=> 'JY22',
            'nm_pengunjung'=> 'Alex',
            'alamat'=> 'Bekasi',
            'jk'=> 'Pria',
            'no_tlpn'=> '0866587435', 
            'no_ktp'=> 316497258],

            ['id_pengunjung'=> 'BB06',
            'nm_pengunjung'=> 'Zacky',
            'alamat'=> 'Jakarta',
            'jk'=> 'Pria',
            'no_tlpn'=> '0225687451', 
            'no_ktp'=> 794613852],

            ['id_pengunjung'=> 'RN02',
            'nm_pengunjung'=> 'Tasya',
            'alamat'=> 'Bandung',
            'jk'=> 'Wanita',
            'no_tlpn'=> '0895221122', 
            'no_ktp'=> 987321465],
        
        ];
        DB::table('pengunjung')->insert($sample);
    }
}
