<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\v1\Generation;

use App\Models\Generation;
use Spatie\QueryBuilder\QueryBuilder;
use App\Http\Controllers\Api\v1\ApiController;
use App\Http\Resources\Api\v1\GenerationResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class IndexController extends ApiController
{
    public function __invoke(): AnonymousResourceCollection
    {
        $generations = QueryBuilder::for(Generation::class)
            ->allowedIncludes([
                'pokemon',
            ])
            ->with('games')
            ->get();

        return GenerationResource::collection($generations);
    }
}
