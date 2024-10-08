<?php

declare(strict_types=1);

namespace App\Http\Resources\Api\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Dex */
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
            'slug' => $this->slug,
            'game' => new GameResource($this->whenLoaded('game')),
            'type' => $this->type,
            'pokemon' => PokemonResource::collection($this->whenLoaded('pokemon')),
        ];
    }
}
