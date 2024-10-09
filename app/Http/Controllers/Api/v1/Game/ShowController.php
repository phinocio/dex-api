<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\v1\Game;

use App\Models\Game;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedInclude;
use App\Http\Resources\Api\v1\GameResource;
use App\Http\Controllers\Api\v1\ApiController;

class ShowController extends ApiController
{
    public function __invoke(string $param): GameResource
    {
        $game = QueryBuilder::for(Game::where('slug', $param))
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
