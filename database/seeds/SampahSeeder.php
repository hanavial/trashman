<?php

use Illuminate\Database\Seeder;
use App\Models\Sampah;

class SampahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sampah::create([
            'kategori_id' => 1,
            'nama' => 'Kertas HVS'
        ]);
        Sampah::create([
            'kategori_id' => 2,
            'nama' => 'Plastik PET'
        ]);
        Sampah::create([
            'kategori_id' => 2,
            'nama' => 'Plastik Kresek'
        ]);
        Sampah::create([
            'kategori_id' => 3,
            'nama' => 'Baja Ringan'
        ]);
    }
}
