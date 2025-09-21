<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\v1\Gen1Pokemon;
use App\Enums\v1\Gen2Pokemon;
use App\Enums\v1\Gen3Pokemon;
use App\Enums\v1\Gen4Pokemon;
use App\Enums\v1\Gen5Pokemon;
use App\Enums\v1\Gen6Pokemon;
use App\Enums\v1\Gen7Pokemon;
use App\Enums\v1\Gen8Pokemon;
use App\Enums\v1\Gen9Pokemon;
use App\Enums\v1\Sprite;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

final class HomeSpriteSeeder extends Seeder
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
        ])->map(fn ($pokemon) => [
            'url' => Sprite::HOME->getBaseUrl().'/'.$pokemon->value.'.png',
            'version' => Sprite::HOME->value,
            'shiny' => false,
            'pokemon_id' => $pokemon->value,

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
        ])->map(fn ($pokemon) => [
            'url' => Sprite::HOME->getShinyBaseUrl().'/'.$pokemon->value.'.png',
            'version' => Sprite::HOME->value,
            'shiny' => true,
            'pokemon_id' => $pokemon->value,
        ])->toArray();

        DB::table('sprites')->insert($pokemon);
        DB::table('sprites')->insert($shinyPokemon);
    }
}
