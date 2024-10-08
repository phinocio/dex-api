<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Resources\Api\v1\GameResource;
use App\Models\Game;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Spatie\QueryBuilder\AllowedInclude;
use Spatie\QueryBuilder\QueryBuilder;

class GameController extends ApiController
{
    public function index(): AnonymousResourceCollection
    {
        $games = QueryBuilder::for(Game::class)
            ->allowedIncludes([
                'pokemon',
                AllowedInclude::relationship('national_dex', 'nationalDex'),
                AllowedInclude::relationship('all_dexes', 'dexes'),
            ])
            ->with(['generation'])
            ->get();

        return GameResource::collection($games);
    }

    public function show(string|int $param): GameResource
    {
        $game = QueryBuilder::for(Game::where('id', $param)->orWhere('slug', $param))
            ->allowedIncludes([
                'pokemon',
                AllowedInclude::relationship('national_dex', 'nationalDex'),
                AllowedInclude::relationship('regional_dex', 'regionalDex'),
                AllowedInclude::relationship('generational_dex', 'generationalDex'),
                AllowedInclude::relationship('all_dexes', 'dexes'),
            ])
            ->with(['generation'])
            ->firstOrFail();

        return new GameResource($game);
    }
}
