<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\v1\Game;

use App\Models\Game;
use App\Policies\Api\v1\GamePolicy;
use Illuminate\Support\Facades\Gate;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedInclude;
use App\Http\Resources\Api\v1\GameResource;
use App\Http\Controllers\Api\v1\ApiController;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class IndexController extends ApiController
{
    protected string $policyClass = GamePolicy::class;

    public function __invoke(): AnonymousResourceCollection
    {
        Gate::authorize('viewAny', Game::class);

        $games = QueryBuilder::for(Game::class)
            ->allowedIncludes([
                'pokemon',
                AllowedInclude::relationship('dexes', 'gameDexes'),
                AllowedInclude::relationship('national_dex', 'nationalDex'),
                AllowedInclude::relationship('regional_dex', 'regionalDex'),
                AllowedInclude::relationship('generational_dex', 'generationalDex'),
            ])
            ->with(['generation'])
            ->get();

        return GameResource::collection($games);
    }

}
