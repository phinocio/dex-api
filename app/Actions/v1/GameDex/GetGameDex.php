<?php

declare(strict_types=1);

namespace App\Actions\v1\GameDex;

use App\Models\GameDex;
use Illuminate\Database\Eloquent\Relations\Relation;
use Spatie\QueryBuilder\AllowedInclude;
use Spatie\QueryBuilder\QueryBuilder;

final class GetGameDex
{
    public function execute(string $gameDexSlug): GameDex
    {
        $query = GameDex::query()->where('slug', $gameDexSlug);

        $queryBuilder = QueryBuilder::for($query)
            ->allowedIncludes([
                AllowedInclude::relationship('games'),
                AllowedInclude::relationship('pokemon'),
            ])
            ->with([
                'games' => function (Relation $query) {
                    return $query->orderBy('games.generation_id');
                },
                'pokemon' => function (Relation $query) {
                    return $query->orderBy('national_dex_number');
                },
            ]);

        /** @var GameDex $gameDex */
        $gameDex = $queryBuilder->firstOrFail();

        return $gameDex;
    }
}
