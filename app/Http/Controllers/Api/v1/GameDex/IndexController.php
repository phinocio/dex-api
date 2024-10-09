<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\v1\GameDex;

use App\Models\GameDex;
use Spatie\QueryBuilder\QueryBuilder;
use App\Http\Controllers\Api\v1\ApiController;
use App\Http\Resources\Api\v1\GameDexResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class IndexController extends ApiController
{
    public function __invoke(): AnonymousResourceCollection
    {
        $dexes = QueryBuilder::for(GameDex::class)
            ->allowedIncludes([
                'pokemon',
            ])
            ->with('game')
            ->get();

        return GameDexResource::collection($dexes);
    }
}
