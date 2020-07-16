<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SampahResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            // 'kategori_id' => $this->kategori_id,
            'kategori_id' => $this->kategori_sampah->id,
            'kategori_nama' => $this->kategori_sampah->kategori_nama,
            'nama' => $this->nama,
            'deskripsi' => $this->deskripsi,
            'ditambahkan' => $this->created_at->format('d F, Y'),
        ];
    }
}
