<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProposalReview extends Model
{
    protected $fillable = [
        'proposal_id',
        'reviewer_id',
        'catatan',
        'status',
        'reviewed_at'
    ];

    public function proposal()
    {
        return $this->belongsTo(Proposal::class);
    }

    public function reviewer()
    {
        return $this->belongsTo(Reviewer::class);
    }
}