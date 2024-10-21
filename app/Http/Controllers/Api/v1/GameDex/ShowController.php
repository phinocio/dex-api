<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\v1\GameDex;

use App\Models\GameDex;
use Illuminate\Support\Facades\Gate;
use Spatie\QueryBuilder\QueryBuilder;
use App\Policies\Api\v1\GameDexPolicy;
use App\Http\Controllers\Api\v1\ApiController;
use App\Http\Resources\Api\v1\GameDexResource;

class ShowController extends ApiController
{
    protected string $policyClass = GameDexPolicy::class;

    public function __invoke(string $param): GameDexResource
    {
        $dex = QueryBuilder::for(GameDex::where('slug', $param))
            ->allowedIncludes([
                'pokemon',
            ])
            ->with('games')
            ->firstOrFail();

        Gate::authorize('view', $dex);

        return new GameDexResource($dex);
    }
}
