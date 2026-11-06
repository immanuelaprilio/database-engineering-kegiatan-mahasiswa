<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $fillable = [
        'kegiatan_id',
        'user_id',
        'judul',
        'file_proposal',
        'status',
        'submitted_at'
    ];

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class);
    }

    public function reviews()
    {
        return $this->hasMany(ProposalReview::class);
    }
}