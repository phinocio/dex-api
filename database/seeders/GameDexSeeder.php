<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\GameDex;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameDexSeeder extends Seeder
{
    /** Run the database seeds. */
    public function run(): void
    {
        DB::table('game_dexes')->insert(
            collect(GameDex::cases())->map(function (GameDex $dex) {
                return [
                    'id' => $dex->value,
                    'name' => $dex->name(),
                    'slug' => $dex->slug(),
                    'type' => $dex->type(),
                ];
            })->toArray(),
        );
    }
}
