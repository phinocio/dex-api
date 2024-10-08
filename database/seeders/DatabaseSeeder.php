<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            GenerationSeeder::class,
            GameSeeder::class,
            PokemonSeeder::class,
            DexSeeder::class,
            DexPokemonSeeder::class,
            GamePokemonSeeder::class,
            SpriteSeeder::class,
        ]);
    }
}
