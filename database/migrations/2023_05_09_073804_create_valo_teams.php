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
        Schema::create('valo_teams', function (Blueprint $table) {
            $table->id();
            $table->string('nama_team')->unique();
            $table->string('logo_team')->default('tes');
            $table->string('payment')->default('tes');
            $table->enum('slot', ['1', '2'])->default('1');
            $table->enum('status', ['approved','pending','not_approved'])->default('not_approved');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('valo_teams');
    }
};
