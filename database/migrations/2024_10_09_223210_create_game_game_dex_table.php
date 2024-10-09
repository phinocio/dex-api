<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /** Run the migrations. */
    public function up(): void
    {
        Schema::create('game_game_dex', function (Blueprint $table) {
            $table->foreignId('game_id')->constrained();
            $table->foreignId('game_dex_id')->constrained();

            $table->primary(['game_id', 'game_dex_id']);
        });
    }

    /** Reverse the migrations. */
    public function down(): void
    {
        Schema::dropIfExists('game_game_dexes');
    }
};
