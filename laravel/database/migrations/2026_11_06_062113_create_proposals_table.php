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
    Schema::create('proposals', function (Blueprint $table) {
        $table->id();

        $table->foreignId('kegiatan_id')
              ->constrained('kegiatans')
              ->cascadeOnDelete();

        $table->foreignId('user_id')
              ->constrained('users')
              ->restrictOnDelete();

        $table->string('judul');
        $table->string('file_proposal')->nullable();
        $table->string('status');
        $table->timestamp('submitted_at')->nullable();

        $table->timestamps();

        $table->index('status');

        $table->unique([
            'kegiatan_id',
            'user_id'
        ]);
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proposals');
    }
};
