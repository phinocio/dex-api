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
        Schema::create('sprites', function (Blueprint $table) {
            $table->id();
            $table->string('url')->unique();
            $table->enum('verison', [
                'red-blue',
                'yellow',
                'gold',
                'silver',
                'crystal',
                'ruby-sapphire',
                'emerald',
                'firered-leafgreen',
                'diamond-pearl',
                'platinum',
                'heartgold-soulsilver',
                'black-white',
                'x-y',
                'omega-ruby-alpha-sapphire',
                'ultra-sun-ultra-moon',
            ]);
            $table->boolean('shiny')->default(false);
            $table->foreignId('pokemon_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sprites');
    }
};
