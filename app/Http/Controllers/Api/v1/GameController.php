<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Resources\Api\v1\GameResource;
use App\Models\Game;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class GameController extends ApiController
{
    public function index(): AnonymousResourceCollection
    {
        return GameResource::collection(Game::all());
    }
}
