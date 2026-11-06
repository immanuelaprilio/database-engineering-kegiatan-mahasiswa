<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $fillable = [
        'organisasi_id',
        'nama_kegiatan',
        'tanggal_mulai',
        'tanggal_selesai',
        'status'
    ];

    public function organisasi()
    {
        return $this->belongsTo(Organisasi::class);
    }

    public function proposals()
    {
        return $this->hasMany(Proposal::class);
    }
}