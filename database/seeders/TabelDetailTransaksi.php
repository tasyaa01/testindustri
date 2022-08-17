<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class TabelDetailTransaksi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            ['id_dtl_transaksi' => 'DT1001', 
            'NO_transaksi' => 0001, 
            'NO_kamar' => 1],

            ['id_dtl_transaksi' => 'DT1002', 
            'NO_transaksi' => 0002, 
            'NO_kamar' => 2],

            ['id_dtl_transaksi' => 'DT1003', 
            'NO_transaksi' => 0003, 
            'NO_kamar' => 3],

            ['id_dtl_transaksi' => 'DT1004', 
            'NO_transaksi' => 0004, 
            'NO_kamar' => 4],

            ['id_dtl_transaksi' => 'DT1005', 
            'NO_transaksi' => 0005, 
            'NO_kamar' => 5],
        
        ];
        DB::table('detailtransaksi')->insert($sample);
    }
}
