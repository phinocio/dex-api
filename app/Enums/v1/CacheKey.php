<?php

declare(strict_types=1);

namespace App\Enums\v1;

enum CacheKey: string
{
    case USER = 'user';
    case USERS = 'users';
    case GAME = 'game';
    case GAMES = 'games';
    case GAME_DEX = 'game_dex';
    case GAME_DEXES = 'game_dexes';
    case POKEMON = 'pokemon';
    case POKEMONS = 'pokemons';
    case GENERATION = 'generation';
    case GENERATIONS = 'generations';

    public function with(string ...$keys): string
    {
        return implode(':', array_map(
            fn (string $key) => mb_strtolower($key),
            array_merge([$this->value], $keys)
        ));
    }
}
