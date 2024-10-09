<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\v1\Generation;

use App\Models\Generation;
use Illuminate\Support\Facades\Gate;
use Spatie\QueryBuilder\QueryBuilder;
use App\Policies\Api\v1\GenerationPolicy;
use App\Http\Controllers\Api\v1\ApiController;
use App\Http\Resources\Api\v1\GenerationResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class IndexController extends ApiController
{
    protected string $policyClass = GenerationPolicy::class;

    public function __invoke(): AnonymousResourceCollection
    {
        Gate::authorize('viewAny', Generation::class);

        $generations = QueryBuilder::for(Generation::class)
            ->allowedIncludes([
                'pokemon',
            ])
            ->with('games')
            ->get();

        return GenerationResource::collection($generations);
    }
}
