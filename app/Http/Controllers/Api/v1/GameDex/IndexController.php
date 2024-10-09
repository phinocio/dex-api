<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\v1\GameDex;

use App\Models\GameDex;
use Illuminate\Support\Facades\Gate;
use Spatie\QueryBuilder\QueryBuilder;
use App\Policies\Api\v1\GameDexPolicy;
use App\Http\Controllers\Api\v1\ApiController;
use App\Http\Resources\Api\v1\GameDexResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class IndexController extends ApiController
{
    protected string $policyClass = GameDexPolicy::class;

    public function __invoke(): AnonymousResourceCollection
    {
        Gate::authorize('viewAny', GameDex::class);

        $dexes = QueryBuilder::for(GameDex::class)
            ->allowedIncludes([
                'pokemon',
            ])
            ->with('game')
            ->get();

        return GameDexResource::collection($dexes);
    }
}
