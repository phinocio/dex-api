<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /** Run the migrations. */
    public function up(): void
    {
        // Conditionally create the enum type only if it doesn't exist
        DB::statement("DO $$
        BEGIN
            IF NOT EXISTS (SELECT 1 FROM pg_type WHERE typname = 'game_dex_type_enum') THEN
                CREATE TYPE game_dex_type_enum AS ENUM ('generational', 'national', 'regional');
            END IF;
        END$$;");

        Schema::create('game_dexes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->foreignId('game_id')->constrained();

            // Define 'type' as a string initially
            $table->string('type');
        });

        // Modify the 'type' column to use the enum type
        DB::statement("ALTER TABLE game_dexes ALTER COLUMN type TYPE game_dex_type_enum USING (type::game_dex_type_enum)");
    }

    /** Reverse the migrations. */
    public function down(): void
    {
        // Drop the table first
        Schema::dropIfExists('game_dexes');

        // Conditionally drop the enum type only if it exists
        DB::statement("DO $$
        BEGIN
            IF EXISTS (SELECT 1 FROM pg_type WHERE typname = 'game_dex_type_enum') THEN
                DROP TYPE game_dex_type_enum;
            END IF;
        END$$;");
    }
};
