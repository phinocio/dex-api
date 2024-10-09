<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\v1\Game;

use App\Models\Game;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedInclude;
use App\Http\Resources\Api\v1\GameResource;
use App\Http\Controllers\Api\v1\ApiController;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class IndexController extends ApiController
{
    public function __invoke(): AnonymousResourceCollection
    {
        $games = QueryBuilder::for(Game::class)
            ->allowedIncludes([
                'pokemon',
                AllowedInclude::relationship('national_dex', 'nationalDex'),
                AllowedInclude::relationship('regional_dex', 'regionalDex'),
                AllowedInclude::relationship('generational_dex', 'generationalDex'),
                AllowedInclude::relationship('all_dexes', 'dexes'),
            ])
            ->with(['generation'])
            ->get();

        return GameResource::collection($games);
    }

}
