<?php

declare(strict_types=1);

namespace App\Http\Resources\Api\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Game */
class GameResource extends JsonResource
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
            'dexes' => GameDexResource::collection($this->whenLoaded('gameDexes')),
            'national_dex' => GameDexResource::collection($this->whenLoaded('nationalDex')),
            'regional_dex' => GameDexResource::collection($this->whenLoaded('regionalDex')),
            'generational_dex' => GameDexResource::collection($this->whenLoaded('generationalDex')),
            'pokemon' => PokemonResource::collection($this->whenLoaded('pokemon')),
            'links' => [
                'self' => route('v1:games:show', $this->slug),
            ],
        ];
    }
}
