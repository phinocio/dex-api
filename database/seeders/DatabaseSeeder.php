<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /** Seed the application's database. */
    public function run(): void
    {
        $this->call([
            GenerationSeeder::class,
            GameSeeder::class,
            PokemonSeeder::class,
            GameDexSeeder::class,
            Gen1DexesSeeder::class,
            Gen2DexesSeeder::class,
            GamePokemonSeeder::class,
            SpriteSeeder::class,
            FormSeeder::class,
            FormPokemonSeeder::class,
            GameGameDexSeeder::class,
        ]);
    }
}
