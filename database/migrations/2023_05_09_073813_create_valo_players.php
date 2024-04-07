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
        Schema::create('valo_players', function (Blueprint $table) {
            $table->id();
            $table->foreignId('valo_team_id')->constrained('valo_teams')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name');
            $table->string('nick');
            $table->string('tagline');
            $table->string('no_hp');
            $table->string('email');
            $table->string('alamat');
            $table->string('tanda_tangan')->nullable();
            $table->string('foto')->nullable();
            $table->enum('role', ['ketua', 'anggota', 'cadangan'])->default('anggota');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('valo_players');
    }
};
