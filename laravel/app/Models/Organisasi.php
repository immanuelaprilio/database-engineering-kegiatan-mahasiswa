<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
    protected $fillable = [
        'nama',
        'jenis',
        'deskripsi'
    ];

    public function kegiatans()
    {
        return $this->hasMany(Kegiatan::class);
    }
}