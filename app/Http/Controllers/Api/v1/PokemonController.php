<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Resources\Api\v1\PokemonResource;
use App\Models\Pokemon;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Spatie\QueryBuilder\QueryBuilder;

class PokemonController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index(): AnonymousResourceCollection
    {
        $pokemon = QueryBuilder::for(Pokemon::class)
            ->allowedFilters(['name'])
            ->get();

        return PokemonResource::collection($pokemon);
    }

    public function show(string|int $param): PokemonResource
    {
        $pokemon = QueryBuilder::for(Pokemon::class)
            ->allowedFilters(['name'])
            ->where('id', $param)
            ->first();

        return new PokemonResource($pokemon);
    }
}
