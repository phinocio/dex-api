<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\v1\Pokemon;

use App\Models\Pokemon;
use Illuminate\Support\Facades\Gate;
use Spatie\QueryBuilder\QueryBuilder;
use App\Policies\Api\v1\PokemonPolicy;
use App\Http\Controllers\Api\v1\ApiController;
use App\Http\Resources\Api\v1\PokemonResource;

class ShowController extends ApiController
{
    protected string $policyClass = PokemonPolicy::class;

    public function __invoke(string $param): PokemonResource
    {
        $pokemon = QueryBuilder::for(Pokemon::where('slug', $param))
            ->allowedIncludes([
                'games',
                'generation',
            ])
            ->firstOrFail();

        Gate::authorize('view', $pokemon);

        return new PokemonResource($pokemon);
    }
}
