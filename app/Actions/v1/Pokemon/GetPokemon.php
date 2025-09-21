<?php

declare(strict_types=1);

namespace App\Actions\v1\Pokemon;

use App\Models\Pokemon;
use Illuminate\Database\Eloquent\Relations\Relation;
use Spatie\QueryBuilder\AllowedInclude;
use Spatie\QueryBuilder\QueryBuilder;

final class GetPokemon
{
    public function execute(string $pokemonSlug): Pokemon
    {
        $query = Pokemon::query()->where('slug', $pokemonSlug);

        $queryBuilder = QueryBuilder::for($query)
            ->allowedIncludes([
                AllowedInclude::relationship('evolves_from', 'evolvesFrom'),
                AllowedInclude::relationship('forms'),
                AllowedInclude::relationship('games'),
                AllowedInclude::relationship('generation'),
                AllowedInclude::relationship('sprites'),
            ])
            ->with([
                'evolvesFrom',
                'forms',
                'games' => function (Relation $query) {
                    $query->orderBy('games.generation_id');
                },
                'generation',
                'sprites',
            ]);

        /** @var Pokemon $pokemon */
        $pokemon = $queryBuilder->firstOrFail();

        return $pokemon;
    }
}
