<?php

declare(strict_types=1);

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
            'national_dex_number' => $this->national_dex_number,
            'name' => $this->name,
            'slug' => $this->slug,
            'evolves_from' => new PokemonResource($this->whenLoaded('evolvesFrom')),
            'forms' => FormResource::collection($this->whenLoaded('forms')),
            'games' => GameResource::collection($this->whenLoaded('games')),
            'generation' => new GenerationResource($this->whenLoaded('generation')),
            'sprites' => SpriteResource::collection($this->whenLoaded('sprites')),
            'links' => [
                'self' => route('v1:pokemon:show', $this->slug),
            ],
        ];
    }
}
