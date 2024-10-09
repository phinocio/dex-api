<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\v1;

use App\Http\Resources\Api\v1\GameDexResource;
use App\Models\GameDex;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Spatie\QueryBuilder\QueryBuilder;

class GameDexController extends ApiController
{
    public function index(): AnonymousResourceCollection
    {
        $dexes = QueryBuilder::for(GameDex::class)
            ->allowedIncludes([
                'pokemon',
            ])
            ->with('game')
            ->get();

        return GameDexResource::collection($dexes);
    }

    public function show(string|int $param): GameDexResource
    {
        $dex = QueryBuilder::for(GameDex::where('id', $param)->orWhere('slug', $param))
            ->allowedIncludes([
                'pokemon',
            ])
            ->with('game')
            ->firstOrFail();

        return new GameDexResource($dex);
    }
}
