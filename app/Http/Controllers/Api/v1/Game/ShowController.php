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

class ShowController extends ApiController
{
    protected string $policyClass = GamePolicy::class;

    public function __invoke(string $param): GameResource
    {
        $game = QueryBuilder::for(Game::where('slug', $param))
            ->allowedIncludes([
                'pokemon',
                AllowedInclude::relationship('dexes', 'gameDexes'),
            ])
            ->with(['generation'])
            ->firstOrFail();

        Gate::authorize('view', $game);

        return new GameResource($game);
    }
}
