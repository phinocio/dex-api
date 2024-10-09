<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\v1\Pokemon;

use App\Models\Pokemon;
use Spatie\QueryBuilder\QueryBuilder;
use App\Http\Controllers\Api\v1\ApiController;
use App\Http\Resources\Api\v1\PokemonResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class IndexController extends ApiController
{
    /** Display a listing of the resource. */
    public function __invoke(): AnonymousResourceCollection
    {
        $pokemon = QueryBuilder::for(Pokemon::class)
            ->allowedIncludes([
                'games',
                'generation',
                'sprites',
            ])
            ->get();

        return PokemonResource::collection($pokemon);
    }
}
