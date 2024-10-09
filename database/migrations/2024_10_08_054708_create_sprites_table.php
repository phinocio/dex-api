<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Conditionally create the enum type only if it doesn't exist
        DB::statement("DO $$
        BEGIN
            IF NOT EXISTS (SELECT 1 FROM pg_type WHERE typname = 'version_enum') THEN
                CREATE TYPE version_enum AS ENUM (
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
                    'ultra-sun-ultra-moon'
                );
            END IF;
        END$$;");

        Schema::create('sprites', function (Blueprint $table) {
            $table->id();
            $table->string('url')->unique();
            // Define the version column using the custom enum type directly
            $table->string('version');
            $table->boolean('shiny')->default(false);
            $table->foreignId('pokemon_id')->constrained();
            $table->json('meta')->nullable();
        });

        // Modify the 'version' column to use the custom enum type
        DB::statement("ALTER TABLE sprites ALTER COLUMN version TYPE version_enum USING (version::version_enum)");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sprites');

        // Conditionally drop the enum type only if it exists
        DB::statement("DO $$
        BEGIN
            IF EXISTS (SELECT 1 FROM pg_type WHERE typname = 'version_enum') THEN
                DROP TYPE version_enum;
            END IF;
        END$$;");
    }
};
