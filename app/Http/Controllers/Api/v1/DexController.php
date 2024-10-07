<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Resources\Api\v1\DexResource;
use App\Models\Dex;
use Spatie\QueryBuilder\QueryBuilder;

class DexController extends ApiController
{
    public function index()
    {
        $dexes = QueryBuilder::for(Dex::class)
            ->allowedIncludes([
                'pokemon',
            ])
            ->get();

        return DexResource::collection($dexes);
    }

    public function show(Dex $dex)
    {
        //
    }
}
