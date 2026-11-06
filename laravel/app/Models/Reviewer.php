<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reviewer extends Model
{
    protected $fillable = [
        'user_id',
        'level_review'
    ];

    public function proposalReviews()
    {
        return $this->hasMany(ProposalReview::class);
    }
}