<?php

declare(strict_types=1);

namespace App\Actions\v1\Game;

use App\Models\Game;
use Illuminate\Database\Eloquent\Relations\Relation;
use Spatie\QueryBuilder\AllowedInclude;
use Spatie\QueryBuilder\QueryBuilder;

final class GetGame
{
    public function execute(string $gameSlug): Game
    {
        $query = Game::query()->where('slug', $gameSlug);

        $queryBuilder = QueryBuilder::for($query)
            ->allowedIncludes([
                'pokemon',
                AllowedInclude::relationship('generation'),
                AllowedInclude::relationship('game_dexes', 'gameDexes'),
                AllowedInclude::relationship('national_dex', 'nationalDex'),
                AllowedInclude::relationship('regional_dex', 'regionalDex'),
                AllowedInclude::relationship('generational_dex', 'generationalDex'),
            ])
            ->with([
                'generation',
                'gameDexes',
                'nationalDex',
                'regionalDex',
                'generationalDex',
                'pokemon' => function (Relation $query) {
                    return $query->orderBy('national_dex_number');
                },
            ]);

        /** @var Game $game */
        $game = $queryBuilder->firstOrFail();

        return $game;
    }
}
