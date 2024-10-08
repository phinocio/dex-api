<?php

namespace App\Http\Resources\Api\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Pokemon */
class PokemonResource extends JsonResource
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
            'generation' => new GenerationResource($this->whenLoaded('generation')),
            'games' => GameResource::collection($this->whenLoaded('games')),
            'national_dex_number' => $this->national_dex_number,
            'sprites' => SpriteResource::collection($this->whenLoaded('sprites')),
        ];
    }
}
