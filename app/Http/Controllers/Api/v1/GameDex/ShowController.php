<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\v1\GameDex;

use App\Models\GameDex;
use Spatie\QueryBuilder\QueryBuilder;
use App\Http\Controllers\Api\v1\ApiController;
use App\Http\Resources\Api\v1\GameDexResource;

class ShowController extends ApiController
{
    public function __invoke(string $param): GameDexResource
    {
        $dex = QueryBuilder::for(GameDex::where('slug', $param))
            ->allowedIncludes([
                'pokemon',
            ])
            ->with('game')
            ->firstOrFail();

        return new GameDexResource($dex);
    }
}
