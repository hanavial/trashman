<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sampah extends Model
{
    protected $table = 'sampah';

    protected $guarded = [];

    public function kategori_sampah()
    {
        return $this->belongsTo(KategoriSampah::class, 'kategori_id');
    }
}
