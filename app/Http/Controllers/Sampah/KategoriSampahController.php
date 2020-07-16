<?php

namespace App\Http\Controllers\Sampah;

use App\Models\KategoriSampah;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KategoriSampahController extends Controller
{
    public function index()
    {
        $kategori = KategoriSampah::get();
        return response()->json([
            'message' => 'Menampilkan data kategori sampah',
            'status' => 200,
            
        ],200);
    }
}
