<?php

declare(strict_types=1);

namespace App\Enums;

enum Game: int
{
    case HOME = 1;
    case RED = 2;
    case BLUE = 3;
    case YELLOW = 4;
    case GOLD = 5;
    case SILVER = 6;
    case CRYSTAL = 7;
    case RUBY = 8;
    case SAPPHIRE = 9;
    case EMERALD = 10;
    case FIRE_RED = 11;
    case LEAF_GREEN = 12;
    case DIAMOND = 13;
    case PEARL = 14;
    case PLATINUM = 15;
    case HEART_GOLD = 16;
    case SOUL_SILVER = 17;
    case BLACK = 18;
    case WHITE = 19;
    case BLACK_2 = 20;
    case WHITE_2 = 21;
    case X = 22;
    case Y = 23;
    case OMEGA_RUBY = 24;
    case ALPHA_SAPPHIRE = 25;
    case SUN = 26;
    case MOON = 27;
    case ULTRA_SUN = 28;
    case ULTRA_MOON = 29;
    case LETS_GO_PIKACHU = 30;
    case LETS_GO_EEVEE = 31;
    case SWORD = 32;
    case SHIELD = 33;
    case BRILLIANT_DIAMOND = 34;
    case SHINING_PEARL = 35;
    case LEGENDS_ARCEUS = 36;
    case SCARLET = 37;
    case VIOLET = 38;

    public function generation(): Generation
    {
        return match ($this) {
            Game::HOME => Generation::HOME,
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
            self::HOME => 'Home',
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
            self::HOME => 'home',
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
