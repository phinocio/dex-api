<?php

namespace App\Http\Resources\Api\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DexResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'slug' => $this->slug,
            'game' => new GameResource($this->whenLoaded('game')),
            'type' => $this->type,
            'pokemon' => PokemonResource::collection($this->whenLoaded('pokemon')),
        ];
    }
}
