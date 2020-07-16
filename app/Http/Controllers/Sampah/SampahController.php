<?php

namespace App\Http\Controllers\Sampah;

use App\Models\{Sampah, KategoriSampah};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SampahController extends Controller
{
    public function store()
    {
        $kategori = KategoriSampah::findOrFail(request('kategori_id'));

        $sampah = Sampah::create([
            'kategori_id' => $kategori->id,
            'nama' => request('nama'),
            'deskripsi' => request('deskripsi'),
        ]);

        return response()->json([
            'message' => 'Sampah baru telah ditambahkan',
            'sampah' => $sampah,
        ]);
    }
}
