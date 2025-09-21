<?php

declare(strict_types=1);

namespace App\Http\Controllers\v1\GameDex;

use App\Actions\v1\GameDex\GetGameDex;
use App\Actions\v1\GameDex\GetGameDexes;
use App\Enums\v1\CacheKey;
use App\Http\Resources\v1\GameDex\GameDexResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Cache;

final class GameDexController
{
    public function index(Request $request, GetGameDexes $getGameDexes): AnonymousResourceCollection
    {
        $cacheKey = CacheKey::GAME_DEXES->value;
        if ($request->getQueryString()) {
            $cacheKey = CacheKey::GAME_DEXES->with(md5(mb_strtolower($request->getQueryString())));
        }

        $gameDexes = Cache::tags([CacheKey::GAME_DEXES->value])->rememberForever(
            $cacheKey,
            fn () => $getGameDexes->execute($request)
        );

        return GameDexResource::collection($gameDexes);
    }

    public function show(string $gameDex, GetGameDex $getGameDex): GameDexResource
    {
        $gameDexModel = Cache::rememberForever(
            CacheKey::GAME_DEX->with($gameDex),
            fn () => $getGameDex->execute($gameDex)
        );

        return new GameDexResource($gameDexModel);
    }
}
