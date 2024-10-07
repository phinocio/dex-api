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
        Schema::create('dexes', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->foreignId('game_id')->constrained();
            $table->enum('type', ['generational', 'national', 'regional']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dexes');
    }
};
