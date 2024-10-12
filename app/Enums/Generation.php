<?php

declare(strict_types=1);

namespace App\Enums;

enum Generation: int
{
    case HOME = 1;
    case I = 2;
    case II = 3;
    case III = 4;
    case IV = 5;
    case V = 6;
    case VI = 7;
    case VII = 8;
    case VIII = 9;
    case IX = 10;

    public function name(): string
    {
        return match ($this) {
            self::HOME => 'Home',
            self::I => 'Generation I',
            self::II => 'Generation II',
            self::III => 'Generation III',
            self::IV => 'Generation IV',
            self::V => 'Generation V',
            self::VI => 'Generation VI',
            self::VII => 'Generation VII',
            self::VIII => 'Generation VIII',
            self::IX => 'Generation IX',
        };
    }

    public function slug(): string
    {
        return match ($this) {
            self::HOME => 'home',
            self::I => 'generation-i',
            self::II => 'generation-ii',
            self::III => 'generation-iii',
            self::IV => 'generation-iv',
            self::V => 'generation-v',
            self::VI => 'generation-vi',
            self::VII => 'generation-vii',
            self::VIII => 'generation-viii',
            self::IX => 'generation-ix',
        };
    }
}
