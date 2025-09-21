<?php

declare(strict_types=1);

namespace App\Actions\v1\Generation;

use App\Models\Generation;
use Illuminate\Database\Eloquent\Relations\Relation;
use Spatie\QueryBuilder\AllowedInclude;
use Spatie\QueryBuilder\QueryBuilder;

final class GetGeneration
{
    public function execute(string $generationSlug): Generation
    {
        $query = Generation::query()->where('slug', $generationSlug);

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

        /** @var Generation $generation */
        $generation = $queryBuilder->firstOrFail();

        return $generation;
    }
}
