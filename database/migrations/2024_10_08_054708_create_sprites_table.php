<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /** Run the migrations. */
    public function up(): void
    {
        Schema::create('sprites', function (Blueprint $table) {
            $table->id();
            $table->string('url')->unique();
            $table->string('version');
            $table->boolean('shiny')->default(false);
            $table->foreignId('pokemon_id')->constrained();
        });
    }

    /** Reverse the migrations. */
    public function down(): void
    {
        Schema::dropIfExists('sprites');
    }
};
