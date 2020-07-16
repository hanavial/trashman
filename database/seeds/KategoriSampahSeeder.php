<?php

use Illuminate\Database\Seeder;
use App\Models\KategoriSampah;


class KategoriSampahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KategoriSampah::create([
            'kategori_nama' => 'Kertas'
        ]);
        KategoriSampah::create([
            'kategori_nama' => 'Plastik'
        ]);
        KategoriSampah::create([
            'kategori_nama' => 'Logam'
        ]);
    }
}
