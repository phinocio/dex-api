<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dex_pokemon', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dex_id')->constrained();
            $table->foreignId('pokemon_id')->constrained('pokemon');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dex_pokemon');
    }
};
