<?php

declare(strict_types=1);

namespace App\Http\Controllers\v1\Pokemon;

use App\Actions\v1\Pokemon\GetPokemon;
use App\Actions\v1\Pokemon\GetPokemons;
use App\Enums\v1\CacheKey;
use App\Http\Resources\v1\Pokemon\PokemonResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Cache;

final class PokemonController
{
    public function index(Request $request, GetPokemons $getPokemons): AnonymousResourceCollection
    {
        $cacheKey = CacheKey::POKEMONS->value;
        if ($request->getQueryString()) {
            $cacheKey = CacheKey::POKEMONS->with(md5(mb_strtolower($request->getQueryString())));
        }

        $pokemon = Cache::tags([CacheKey::POKEMONS->value])->rememberForever(
            $cacheKey,
            fn () => $getPokemons->execute($request)
        );

        return PokemonResource::collection($pokemon);
    }

    public function show(string $pokemon, GetPokemon $getPokemon): PokemonResource
    {
        $pokemonModel = Cache::rememberForever(
            CacheKey::POKEMON->with($pokemon),
            fn () => $getPokemon->execute($pokemon)
        );

        return new PokemonResource($pokemonModel);
    }
}
