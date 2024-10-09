<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\v1\Pokemon;

use App\Models\Pokemon;
use Spatie\QueryBuilder\QueryBuilder;
use App\Http\Controllers\Api\v1\ApiController;
use App\Http\Resources\Api\v1\PokemonResource;

class ShowController extends ApiController
{
    public function __invoke(string $param): PokemonResource
    {
        $pokemon = QueryBuilder::for(Pokemon::where('slug', $param))
            ->allowedIncludes([
                'games',
                'generation',
            ])
            ->first();

        return new PokemonResource($pokemon);
    }
}
