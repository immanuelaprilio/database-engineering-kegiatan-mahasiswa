<?php

namespace App\Services;

use App\Models\Proposal;
use App\Models\Reviewer;
use App\Models\ProposalReview;
use Illuminate\Support\Facades\DB;

class ProposalService
{
    public function submitProposal(array $data)
    {
        return DB::transaction(function () use ($data) {

            $proposal = Proposal::create([
                'kegiatan_id' => $data['kegiatan_id'],
                'user_id' => $data['user_id'],
                'judul' => $data['judul'],
                'status' => 'submitted'
            ]);

            foreach (Reviewer::all() as $reviewer) {

                ProposalReview::create([
                    'proposal_id' => $proposal->id,
                    'reviewer_id' => $reviewer->id,
                    'status' => 'pending'
                ]);
            }

            return $proposal;
        });
    }
}