<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /** Run the migrations. */
    public function up(): void
    {
        Schema::create('game_dex_pokemon', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_dex_id')->constrained();
            $table->foreignId('pokemon_id')->constrained('pokemon');
        });
    }

    /** Reverse the migrations. */
    public function down(): void
    {
        Schema::dropIfExists('game_dex_pokemon');
    }
};
