<?php

namespace App\Http\Resources\Api\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Generation */
class GenerationResource extends JsonResource
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
            'new_pokemon' => $this->new_pokemon,
            'total_pokemon' => $this->total_pokemon,
            'games' => GameResource::collection($this->whenLoaded('games')),
            'pokemon' => PokemonResource::collection($this->whenLoaded('pokemon')),
        ];
    }
}
