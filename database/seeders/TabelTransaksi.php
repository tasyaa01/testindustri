<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class TabelTransaksi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            ['no_transaksi' => 0001, 
            'ID_pengunjung' => 'BBH06',
            'ID_karyawan' => 'KW01',
            'jmlh_kamar' => 1,
            'tgl_masuk' => '2022-07-08',
            'tgl_keluar' => '2022-07-10',
            'lama_nginap' => 3,
            'total_harga' => 3000000],

            ['no_transaksi' => 0002, 
            'ID_pengunjung' => 'HJ20',
            'ID_karyawan' => 'KW02',
            'jmlh_kamar' => 1,
            'tgl_masuk' => '2022-07-13',
            'tgl_keluar' => '2022-07-15',
            'lama_nginap' => 3,
            'total_harga' => 6000000],

            ['no_transaksi' => 0003, 
            'ID_pengunjung' => 'JY22',
            'ID_karyawan' => 'KW03',
            'jmlh_kamar' => 1,
            'tgl_masuk' => '2022-07-18',
            'tgl_keluar' => '2022-07-20',
            'lama_nginap' => 3,
            'total_harga' => 9000000],

            ['no_transaksi' => 0004, 
            'ID_pengunjung' => 'BB06',
            'ID_karyawan' => 'KW04',
            'jmlh_kamar' => 1,
            'tgl_masuk' => '2022-07-23',
            'tgl_keluar' => '2022-07-25',
            'lama_nginap' => 3,
            'total_harga' => 12000000],

            ['no_transaksi' => 0005, 
            'ID_pengunjung' => 'RN02',
            'ID_karyawan' => 'KW05',
            'jmlh_kamar' => 1,
            'tgl_masuk' => '2022-07-29',
            'tgl_keluar' => '2022-07-31',
            'lama_nginap' => 3,
            'total_harga' => 15000000],
        
        ];
        DB::table('transaksi')->insert($sample);
    }
}
