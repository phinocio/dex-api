<?php

declare(strict_types=1);

namespace App\Http\Controllers\v1\Generation;

use App\Actions\v1\Generation\GetGeneration;
use App\Actions\v1\Generation\GetGenerations;
use App\Enums\v1\CacheKey;
use App\Http\Resources\v1\Generation\GenerationResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Cache;

final class GenerationController
{
    public function index(Request $request, GetGenerations $getGenerations): AnonymousResourceCollection
    {
        $cacheKey = CacheKey::GENERATIONS->value;
        if ($request->getQueryString()) {
            $cacheKey = CacheKey::GENERATIONS->with(md5(mb_strtolower($request->getQueryString())));
        }

        $generations = Cache::tags([CacheKey::GENERATIONS->value])->rememberForever(
            $cacheKey,
            fn () => $getGenerations->execute($request)
        );

        return GenerationResource::collection($generations);
    }

    public function show(string $generation, GetGeneration $getGeneration): GenerationResource
    {
        $generationModel = Cache::rememberForever(
            CacheKey::GENERATION->with($generation),
            fn () => $getGeneration->execute($generation)
        );

        return new GenerationResource($generationModel);
    }
}
