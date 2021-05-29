<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs1 = new mahasiswa();
        $mhs1 -> nbi = "1461900206";
        $mhs1 -> nama_mhs = "Zaky Wahyu Oktavianto";
        $mhs1 -> save();

        $mhs2 = new mahasiswa();
        $mhs2 -> nbi = "1461900242";
        $mhs2 -> nama_mhs = "Fajar Wahyu Purnomo";
        $mhs2 -> save();
    }
}