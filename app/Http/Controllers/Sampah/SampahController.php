<?php

namespace App\Http\Controllers\Sampah;

use App\Models\{Sampah, KategoriSampah};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\SampahResource;

class SampahController extends Controller
{
    public function index()
    {
        $sampah = Sampah::latest()->get();
        return SampahResource::collection($sampah);
    }

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

    public function destroy(Sampah $sampah)
    {
        $sampah->delete();

        return response()->json([
            'message' => 'Sampah telah terhapus',
        ], 200);
    }
}
