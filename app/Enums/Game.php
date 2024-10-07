<?php

namespace App\Enums;

enum Game: int
{
    case RED = 1;
    case BLUE = 2;
    case YELLOW = 3;
    case GOLD = 4;
    case SILVER = 5;
    case CRYSTAL = 6;
    case RUBY = 7;
    case SAPPHIRE = 8;
    case EMERALD = 9;
    case FIRE_RED = 10;
    case LEAF_GREEN = 11;
    case DIAMOND = 12;
    case PEARL = 13;
    case PLATINUM = 14;
    case HEART_GOLD = 15;
    case SOUL_SILVER = 16;
    case BLACK = 17;
    case WHITE = 18;
    case BLACK_2 = 19;
    case WHITE_2 = 20;
    case X = 21;
    case Y = 22;
    case OMEGA_RUBY = 23;
    case ALPHA_SAPPHIRE = 24;
    case SUN = 25;
    case MOON = 26;
    case ULTRA_SUN = 27;
    case ULTRA_MOON = 28;
    case LETS_GO_PIKACHU = 29;
    case LETS_GO_EEVEE = 30;

    public function name(): string
    {
        return match ($this) {
            self::RED => 'Red',
            self::BLUE => 'Blue',
            self::YELLOW => 'Yellow',
            self::GOLD => 'Gold',
            self::SILVER => 'Silver',
            self::CRYSTAL => 'Crystal',
            self::RUBY => 'Ruby',
            self::SAPPHIRE => 'Sapphire',
            self::EMERALD => 'Emerald',
            self::FIRE_RED => 'Fire Red',
            self::LEAF_GREEN => 'Leaf Green',
            self::DIAMOND => 'Diamond',
            self::PEARL => 'Pearl',
            self::PLATINUM => 'Platinum',
            self::HEART_GOLD => 'Heart Gold',
            self::SOUL_SILVER => 'Soul Silver',
            self::BLACK => 'Black',
            self::WHITE => 'White',
            self::BLACK_2 => 'Black 2',
            self::WHITE_2 => 'White 2',
            self::X => 'X',
            self::Y => 'Y',
            self::OMEGA_RUBY => 'Omega Ruby',
            self::ALPHA_SAPPHIRE => 'Alpha Sapphire',
            self::SUN => 'Sun',
            self::MOON => 'Moon',
            self::ULTRA_SUN => 'Ultra Sun',
            self::ULTRA_MOON => 'Ultra Moon',
            self::LETS_GO_PIKACHU => 'Let\'s Go, Pikachu!',
            self::LETS_GO_EEVEE => 'Let\'s Go, Eevee!',
        };
    }

    public function slug(): string
    {
        return match ($this) {
            self::RED => 'red',
            self::BLUE => 'blue',
            self::YELLOW => 'yellow',
            self::GOLD => 'gold',
            self::SILVER => 'silver',
            self::CRYSTAL => 'crystal',
            self::RUBY => 'ruby',
            self::SAPPHIRE => 'sapphire',
            self::EMERALD => 'emerald',
            self::FIRE_RED => 'fire-red',
            self::LEAF_GREEN => 'leaf-green',
            self::DIAMOND => 'diamond',
            self::PEARL => 'pearl',
            self::PLATINUM => 'platinum',
            self::HEART_GOLD => 'heart-gold',
            self::SOUL_SILVER => 'soul-silver',
            self::BLACK => 'black',
            self::WHITE => 'white',
            self::BLACK_2 => 'black-2',
            self::WHITE_2 => 'white-2',
            self::X => 'x',
            self::Y => 'y',
            self::OMEGA_RUBY => 'omega-ruby',
            self::ALPHA_SAPPHIRE => 'alpha-sapphire',
            self::SUN => 'sun',
            self::MOON => 'moon',
            self::ULTRA_SUN => 'ultra-sun',
            self::ULTRA_MOON => 'ultra-moon',
            self::LETS_GO_PIKACHU => 'lets-go-pikachu',
            self::LETS_GO_EEVEE => 'lets-go-eevee',
        };
    }
}
