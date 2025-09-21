<?php

declare(strict_types=1);

namespace App\Http\Resources\v1\Pokemon;

use App\Http\Resources\v1\Form\FormResource;
use App\Http\Resources\v1\Game\GameResource;
use App\Http\Resources\v1\Generation\GenerationResource;
use App\Http\Resources\v1\Sprite\SpriteResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Pokemon */
final class PokemonResource extends JsonResource
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
            'evolves_from' => new self($this->whenLoaded('evolvesFrom')),
            'forms' => FormResource::collection($this->whenLoaded('forms')),
            'games' => GameResource::collection($this->whenLoaded('games')),
            'generation' => new GenerationResource($this->whenLoaded('generation')),
            'sprites' => SpriteResource::collection($this->whenLoaded('sprites')),
            'links' => [
                'self' => route('pokemon.show', $this->slug),
            ],
        ];
    }
}
