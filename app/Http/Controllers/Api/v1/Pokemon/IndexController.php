<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\v1\Pokemon;

use App\Models\Pokemon;
use Illuminate\Support\Facades\Gate;
use Spatie\QueryBuilder\QueryBuilder;
use App\Policies\Api\v1\PokemonPolicy;
use App\Http\Controllers\Api\v1\ApiController;
use App\Http\Resources\Api\v1\PokemonResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Spatie\QueryBuilder\AllowedFilter;

class IndexController extends ApiController
{
    protected string $policyClass = PokemonPolicy::class;

    public function __invoke(): AnonymousResourceCollection
    {
        Gate::authorize('viewAny', Pokemon::class);

        $pokemon = QueryBuilder::for(Pokemon::class)
            ->allowedFilters([
                AllowedFilter::exact('generation', 'generation.slug'),
            ])
            ->allowedIncludes([
                'games',
                'generation',
                'sprites',
                'forms',
            ])
            ->with('evolvesFrom')
            ->orderBy('national_dex_number', 'asc')
            ->get();

        return PokemonResource::collection($pokemon);
    }
}
