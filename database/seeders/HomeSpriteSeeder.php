<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Enums\Gen1Pokemon;
use App\Enums\Gen2Pokemon;
use App\Enums\Gen3Pokemon;
use App\Enums\Gen4Pokemon;
use App\Enums\Gen5Pokemon;
use App\Enums\Gen6Pokemon;
use App\Enums\Gen7Pokemon;
use App\Enums\Gen8Pokemon;
use App\Enums\Gen9Pokemon;
use App\Enums\Sprite;

class HomeSpriteSeeder extends Seeder
{
    public function run(): void
    {
        $pokemon = collect([
            ...Gen1Pokemon::cases(),
            ...Gen2Pokemon::cases(),
            ...Gen3Pokemon::cases(),
            ...Gen4Pokemon::cases(),
            ...Gen5Pokemon::cases(),
            ...Gen6Pokemon::cases(),
            ...Gen7Pokemon::cases(),
            ...Gen8Pokemon::cases(),
            ...Gen9Pokemon::cases(),
        ])->map(fn($pokemon) => [
            'url' => Sprite::HOME->getBaseUrl() . '/' . $pokemon->value . '.png', // Assuming sprite URL follows this pattern
            'version' => Sprite::HOME->value,
            'shiny' => false,
            'pokemon_id' => $pokemon->value, // Assuming Gen1Pokemon enum uses Pokémon names/IDs

        ])->toArray();

        $shinyPokemon = collect([
            ...Gen1Pokemon::cases(),
            ...Gen2Pokemon::cases(),
            ...Gen3Pokemon::cases(),
            ...Gen4Pokemon::cases(),
            ...Gen5Pokemon::cases(),
            ...Gen6Pokemon::cases(),
            ...Gen7Pokemon::cases(),
            ...Gen8Pokemon::cases(),
            ...Gen9Pokemon::cases(),
        ])->map(fn($pokemon) => [
            'url' => Sprite::HOME->getShinyBaseUrl() . '/' . $pokemon->value . '.png', // Assuming sprite URL follows this pattern
            'version' => Sprite::HOME->value,
            'shiny' => true,
            'pokemon_id' => $pokemon->value, // Assuming Gen1Pokemon enum uses Pokémon names/IDs
        ])->toArray();

        DB::table('sprites')->insert($pokemon);
        DB::table('sprites')->insert($shinyPokemon);
    }
}
