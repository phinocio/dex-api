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
            'dexes' => DexResource::collection($this->whenLoaded('dexes')),
            'national_dex' => new DexResource($this->whenLoaded('nationalDex')),
            'regional_dex' => new DexResource($this->whenLoaded('regionalDex')),
            'generational_dex' => new DexResource($this->whenLoaded('generationalDex')),
            'pokemon' => PokemonResource::collection($this->whenLoaded('pokemon')),
        ];
    }
}
