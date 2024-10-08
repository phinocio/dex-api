<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\v1;

use App\Http\Resources\Api\v1\DexResource;
use App\Models\Dex;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Spatie\QueryBuilder\QueryBuilder;

class DexController extends ApiController
{
    public function index(): AnonymousResourceCollection
    {
        $dexes = QueryBuilder::for(Dex::class)
            ->allowedIncludes([
                'pokemon',
            ])
            ->with('game')
            ->get();

        return DexResource::collection($dexes);
    }

    public function show(string|int $param): DexResource
    {
        $dex = QueryBuilder::for(Dex::where('id', $param)->orWhere('slug', $param))
            ->allowedIncludes([
                'pokemon',
            ])
            ->with('game')
            ->firstOrFail();

        return new DexResource($dex);
    }
}
