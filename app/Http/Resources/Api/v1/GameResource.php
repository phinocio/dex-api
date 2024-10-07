<?php

namespace App\Http\Resources\Api\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

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
            'id' => $this->id,
            'name' => $this->name,
            'generation' => new GenerationResource($this->generation),
            'dexes' => DexResource::collection($this->dexes),
            'pokemon' => PokemonResource::collection($this->whenLoaded('pokemon')),
        ];
    }
}
