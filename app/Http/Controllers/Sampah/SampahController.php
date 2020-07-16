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
        $hasil = SampahResource::collection($sampah);
        return response()->json([
            'message' => 'Menampilkan data Sampah',
            'status' => 200,
            'data' => $hasil,
        ],200);
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
            'status' => 200,
            'sampah' => $sampah,
        ],200);
    }

    public function destroy(Sampah $sampah)
    {
        $sampah->delete();

        return response()->json([
            'message' => 'Sampah telah terhapus',
        ], 200);
    }
}
