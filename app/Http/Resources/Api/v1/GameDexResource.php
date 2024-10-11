<?php

declare(strict_types=1);

namespace App\Http\Resources\Api\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\GameDex */
class GameDexResource extends JsonResource
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
            'game' => GameResource::collection($this->whenLoaded('game')),
            'pokemon' => PokemonResource::collection($this->whenLoaded('pokemon')),
            'links' => [
                'self' => route('v1:game-dexes:show', $this->slug),
            ],
        ];
    }
}
