<?php

declare(strict_types=1);

namespace App\Http\Resources\v1\Generation;

use App\Http\Resources\v1\Game\GameResource;
use App\Http\Resources\v1\Pokemon\PokemonResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Generation */
final class GenerationResource extends JsonResource
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
            'links' => [
                'self' => route('generations.show', $this->slug),
            ],
        ];
    }
}
