<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class TabelKaryawan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            ['id_karyawan' => 'KW01', 
            'nm_karyawan' => 'Agus', 
            'jk' => 'Pria'],

            ['id_karyawan' => 'KW02', 
            'nm_karyawan' => 'Naufal', 
            'jk' => 'Pria'],

            ['id_karyawan' => 'KW03', 
            'nm_karyawan' => 'Rizky', 
            'jk' => 'Pria'],

            ['id_karyawan' => 'KW04', 
            'nm_karyawan' => 'Kirana', 
            'jk' => 'Wanita'],

            ['id_karyawan' => 'KW05', 
            'nm_karyawan' => 'Sintya', 
            'jk' => 'Wanita'],
        
        ];
        DB::table('karyawan')->insert($sample);
    }
}
