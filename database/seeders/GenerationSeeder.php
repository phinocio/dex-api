<?php

namespace Database\Seeders;

use App\Enums\Generation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenerationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('generations')->insert([
            [
                'id' => Generation::I,
                'name' => Generation::I->name(),
                'slug' => Generation::I->slug(),
                'new_pokemon' => 151,
                'total_pokemon' => 151,
            ],
            [
                'id' => Generation::II,
                'name' => Generation::II->name(),
                'slug' => Generation::II->slug(),
                'new_pokemon' => 100,
                'total_pokemon' => 251,
            ],
            [
                'id' => Generation::III,
                'name' => Generation::III->name(),
                'slug' => Generation::III->slug(),
                'new_pokemon' => 135,
                'total_pokemon' => 386,
            ],
            [
                'id' => Generation::IV,
                'name' => Generation::IV->name(),
                'slug' => Generation::IV->slug(),
                'new_pokemon' => 107,
                'total_pokemon' => 493,
            ],
            [
                'id' => Generation::V,
                'name' => Generation::V->name(),
                'slug' => Generation::V->slug(),
                'new_pokemon' => 156,
                'total_pokemon' => 649,
            ],
            [
                'id' => Generation::VI,
                'name' => Generation::VI->name(),
                'slug' => Generation::VI->slug(),
                'new_pokemon' => 72,
                'total_pokemon' => 721,
            ],
            [
                'id' => Generation::VII,
                'name' => Generation::VII->name(),
                'slug' => Generation::VII->slug(),
                'new_pokemon' => 88,
                'total_pokemon' => 809,
            ],
            [
                'id' => Generation::VIII,
                'name' => Generation::VIII->name(),
                'slug' => Generation::VIII->slug(),
                'new_pokemon' => 96,
                'total_pokemon' => 905,
            ],
            [
                'id' => Generation::IX,
                'name' => Generation::IX->name(),
                'slug' => Generation::IX->slug(),
                'new_pokemon' => 120,
                'total_pokemon' => 1025,
            ],
        ]);
    }
}
