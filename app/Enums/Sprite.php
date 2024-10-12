<?php

declare(strict_types=1);

namespace App\Enums;

enum Sprite: string
{
    case RED_BLUE = 'red-blue';
    case YELLOW = 'yellow';
    case GOLD = 'gold';
    case SILVER = 'silver';
    case CRYSTAL = 'crystal';
    case RUBY_SAPPHIRE = 'ruby-sapphire';
    case EMERALD = 'emerald';
    case FIRE_RED_LEAF_GREEN = 'firered-leafgreen';
    case DIAMOND_PEARL = 'diamond-pearl';
    case PLATINUM = 'platinum';
    case HEART_GOLD_SOUL_SILVER = 'heartgold-soulsilver';
    case BLACK_WHITE = 'black-white';
    case X_Y = 'x-y';
    case OMEGA_RUBY_ALPHA_SAPPHIRE = 'omega-ruby-alpha-sapphire';
    case ULTRA_SUN_ULTRA_MOON = 'ultra-sun-ultra-moon';
    case DREAM_WORLD = 'dream-world';
    case HOME = 'home';
    case OFFICIAL_ARTWORK = 'official-artwork';
    case SHOWDOWN = 'showdown';

    public function getBaseUrl(): string
    {
        return match ($this) {
            self::RED_BLUE, self::YELLOW => "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/versions/generation-i/{$this->value}/transparent",
            self::GOLD, self::SILVER, self::CRYSTAL => "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/versions/generation-ii/{$this->value}/transparent",
            self::RUBY_SAPPHIRE, self::EMERALD, self::FIRE_RED_LEAF_GREEN => "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/versions/generation-iii/{$this->value}",
            self::DIAMOND_PEARL, self::PLATINUM, self::HEART_GOLD_SOUL_SILVER => "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/versions/generation-iv/{$this->value}",
            self::BLACK_WHITE => "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/versions/generation-v/{$this->value}",
            self::X_Y, self::OMEGA_RUBY_ALPHA_SAPPHIRE => "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/versions/generation-vi/{$this->value}",
            self::ULTRA_SUN_ULTRA_MOON => "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/versions/generation-vii/{$this->value}",
            self::DREAM_WORLD, self::HOME, self::OFFICIAL_ARTWORK, self::SHOWDOWN => "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/{$this->value}",
        };
    }

    public function getShinyBaseUrl(): string
    {
        return match ($this) {
            self::GOLD, self::SILVER, self::CRYSTAL => "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/versions/generation-ii/{$this->value}/transparent/shiny",
            self::RUBY_SAPPHIRE, self::EMERALD, self::FIRE_RED_LEAF_GREEN => "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/versions/generation-iii/{$this->value}/shiny",
            self::DIAMOND_PEARL, self::PLATINUM, self::HEART_GOLD_SOUL_SILVER => "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/versions/generation-iv/{$this->value}/shiny",
            self::BLACK_WHITE => "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/versions/generation-v/{$this->value}/shiny",
            self::X_Y, self::OMEGA_RUBY_ALPHA_SAPPHIRE => "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/versions/generation-vi/{$this->value}/shiny",
            self::ULTRA_SUN_ULTRA_MOON => "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/versions/generation-vii/{$this->value}/shiny",
            self::HOME, self::OFFICIAL_ARTWORK, self::SHOWDOWN => "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/{$this->value}/shiny",
            default => null,
        };

    }
}
