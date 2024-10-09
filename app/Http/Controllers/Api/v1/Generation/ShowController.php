<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\v1\Generation;

use App\Models\Generation;
use Illuminate\Support\Facades\Gate;
use Spatie\QueryBuilder\QueryBuilder;
use App\Policies\Api\v1\GenerationPolicy;
use App\Http\Controllers\Api\v1\ApiController;
use App\Http\Resources\Api\v1\GenerationResource;

class ShowController extends ApiController
{
    protected string $policyClass = GenerationPolicy::class;

    public function __invoke(string $param): GenerationResource
    {
        $generation = QueryBuilder::for(Generation::where('slug', $param))
            ->allowedIncludes([
                'pokemon',
            ])
            ->with('games')
            ->firstOrFail();

        Gate::authorize('view', $generation);

        return new GenerationResource($generation);
    }
}
