<?php

declare(strict_types=1);

namespace App\Http\Controllers\v1\Game;

use App\Actions\v1\Game\GetGame;
use App\Actions\v1\Game\GetGames;
use App\Enums\v1\CacheKey;
use App\Http\Resources\v1\Game\GameResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Cache;

final class GameController
{
    public function index(Request $request, GetGames $getGames): AnonymousResourceCollection
    {
        $cacheKey = CacheKey::GAMES->value;
        if ($request->getQueryString()) {
            $cacheKey = CacheKey::GAMES->with(md5(mb_strtolower($request->getQueryString())));
        }

        $games = Cache::tags([CacheKey::GAMES->value])->rememberForever(
            $cacheKey,
            fn () => $getGames->execute($request)
        );

        return GameResource::collection($games);

    }

    public function show(string $game, GetGame $getGame): GameResource
    {
        $gameModel = Cache::rememberForever(
            CacheKey::GAME->with($game),
            fn () => $getGame->execute($game)
        );

        return new GameResource($gameModel);
    }
}
