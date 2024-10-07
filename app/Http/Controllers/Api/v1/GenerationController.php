<?php

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
            ->allowedFilters(['name'])
            ->get();

        return GenerationResource::collection($generations);
    }

    public function show(Generation $generation): GenerationResource
    {
        return new GenerationResource($generation);
    }
}
