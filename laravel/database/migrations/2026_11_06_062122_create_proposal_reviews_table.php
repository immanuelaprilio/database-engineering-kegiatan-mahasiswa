<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('proposal_reviews', function (Blueprint $table) {
        $table->id();

        $table->foreignId('proposal_id')
              ->constrained('proposals')
              ->cascadeOnDelete();

        $table->foreignId('reviewer_id')
              ->constrained('reviewers');

        $table->text('catatan')->nullable();

        $table->string('status');

        $table->timestamp('reviewed_at')
              ->nullable();

        $table->timestamps();

        $table->index([
            'proposal_id',
            'reviewer_id'
        ]);
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proposal_reviews');
    }
};
