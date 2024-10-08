<?php

declare(strict_types=1);

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
    case SWORD = 31;
    case SHIELD = 32;
    case BRILLIANT_DIAMOND = 33;
    case SHINING_PEARL = 34;
    case LEGENDS_ARCEUS = 35;
    case SCARLET = 36;
    case VIOLET = 37;

    public function generation(): Generation
    {
        return match ($this) {
            Game::RED, Game::BLUE, Game::YELLOW => Generation::I,
            Game::GOLD, Game::SILVER, Game::CRYSTAL => Generation::II,
            Game::RUBY, Game::SAPPHIRE, Game::EMERALD, Game::FIRE_RED, Game::LEAF_GREEN => Generation::III,
            Game::DIAMOND, Game::PEARL, Game::PLATINUM, Game::HEART_GOLD, Game::SOUL_SILVER => Generation::IV,
            Game::BLACK, Game::WHITE, Game::BLACK_2, Game::WHITE_2 => Generation::V,
            Game::X, Game::Y, Game::OMEGA_RUBY, Game::ALPHA_SAPPHIRE => Generation::VI,
            Game::SUN, Game::MOON, Game::ULTRA_SUN, Game::ULTRA_MOON, Game::LETS_GO_PIKACHU, Game::LETS_GO_EEVEE => Generation::VII,
            Game::SWORD, Game::SHIELD, Game::BRILLIANT_DIAMOND, Game::SHINING_PEARL, Game::LEGENDS_ARCEUS => Generation::VIII,
            Game::SCARLET, Game::VIOLET => Generation::IX,
        };
    }

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
            self::SWORD => 'Sword',
            self::SHIELD => 'Shield',
            self::BRILLIANT_DIAMOND => 'Brilliant Diamond',
            self::SHINING_PEARL => 'Shining Pearl',
            self::LEGENDS_ARCEUS => 'Legends Arceus',
            self::SCARLET => 'Scarlet',
            self::VIOLET => 'Violet',
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
            self::SWORD => 'sword',
            self::SHIELD => 'shield',
            self::BRILLIANT_DIAMOND => 'brilliant-diamond',
            self::SHINING_PEARL => 'shining-pearl',
            self::LEGENDS_ARCEUS => 'legends-arceus',
            self::SCARLET => 'scarlet',
            self::VIOLET => 'violet',
        };
    }
}
