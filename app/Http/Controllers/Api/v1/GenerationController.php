<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\v1;

use App\Http\Resources\Api\v1\GenerationResource;
use App\Models\Generation;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Spatie\QueryBuilder\QueryBuilder;

class GenerationController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index(): AnonymousResourceCollection
    {
        $generations = QueryBuilder::for(Generation::class)
            ->allowedIncludes([
                'pokemon',
            ])
            ->with('games')
            ->get();

        return GenerationResource::collection($generations);
    }

    public function show(string|int $param): GenerationResource
    {
        $generation = QueryBuilder::for(Generation::where('id', $param)->orWhere('slug', $param))
            ->allowedIncludes([
                'pokemon',
            ])
            ->with('games')
            ->firstOrFail();

        return new GenerationResource($generation);
    }
}
