<?php

declare(strict_types=1);

namespace App\Http\Resources\v1\GameDex;

use App\Http\Resources\v1\Game\GameResource;
use App\Http\Resources\v1\Pokemon\PokemonResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\GameDex */
final class GameDexResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'slug' => $this->slug,
            'type' => $this->type,
            'games' => GameResource::collection($this->whenLoaded('games')),
            'pokemon' => PokemonResource::collection($this->whenLoaded('pokemon')),
            'links' => [
                'self' => route('game-dexes.show', $this->slug),
            ],
        ];
    }
}
