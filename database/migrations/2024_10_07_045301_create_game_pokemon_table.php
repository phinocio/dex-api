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
        Schema::create('game_pokemon', function (Blueprint $table) {
            $table->foreignId('game_id')->constrained();
            $table->foreignId('pokemon_id')->constrained('pokemon');

            $table->primary(['game_id', 'pokemon_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_pokemon');
    }
};
