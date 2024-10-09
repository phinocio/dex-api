<?php

declare(strict_types=1);

namespace App\Http\Resources\Api\v1;

use App\Http\Resources\FormResource;
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
            'forms' => FormResource::collection($this->whenLoaded('forms')),
            'sprites' => SpriteResource::collection($this->whenLoaded('sprites')),
            'links' => [
                'self' => route('v1:pokemon:show', $this->slug),
            ],
        ];
    }
}
