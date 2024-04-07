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
        Schema::create('mole_players', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mole_team_id')->constrained('mole_teams')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name');
            $table->string('nick');
            $table->string('id_server');
            $table->string('no_hp');
            $table->string('email');
            $table->string('alamat');
            $table->string('tanda_tangan')->nullable()->default('gud');
            $table->string('foto')->nullable()->default('gud');
            $table->enum('role', ['ketua', 'anggota', 'cadangan'])->default('anggota');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mole_players');
    }
};
