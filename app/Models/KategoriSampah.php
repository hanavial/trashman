<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriSampah extends Model
{
    protected $table = 'kategori_sampah';

    public function sampah()
    {
        return $this->hasMany(Sampah::class);
    }
}
