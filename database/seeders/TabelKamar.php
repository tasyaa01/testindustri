<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class TabelKamar extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            ['no_kamar' => 01, 
            'jenis_kamar' => 'Single Room',
            'harga' => 1000000],

            ['no_kamar' => 02, 
            'jenis_kamar' => 'Junior Room',
            'harga' => 2000000],
            
            ['no_kamar' => 03, 
            'jenis_kamar' => 'Superior Room',
            'harga' => 3000000],

            ['no_kamar' => 04, 
            'jenis_kamar' => 'Deluxe Room',
            'harga' => 4000000],

            ['no_kamar' => 05, 
            'jenis_kamar' => 'Presidential Room',
            'harga' => 5000000],
        
        ];
        DB::table('kamar')->insert($sample);
    }
}
