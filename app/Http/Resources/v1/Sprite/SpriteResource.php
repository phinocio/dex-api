<?php

declare(strict_types=1);

namespace App\Http\Resources\v1\Sprite;

use App\Http\Resources\v1\Pokemon\PokemonResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Sprite */
final class SpriteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'url' => $this->url,
            'version' => $this->version,
            'shiny' => $this->shiny,
            'pokemon' => new PokemonResource($this->whenLoaded('pokemon')),
        ];
    }
}
