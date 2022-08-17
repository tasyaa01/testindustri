<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TabelPengunjung::class);
        $this->call(TabelKaryawan::class);
        $this->call(TabelKamar::class);
        $this->call(TabelTransaksi::class);
        $this->call(TabelDetailTransaksi::class);
    }
}
