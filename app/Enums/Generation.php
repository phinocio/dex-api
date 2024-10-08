<?php

declare(strict_types=1);

namespace App\Enums;

enum Generation: int
{
    case I = 1;
    case II = 2;
    case III = 3;
    case IV = 4;
    case V = 5;
    case VI = 6;
    case VII = 7;
    case VIII = 8;
    case IX = 9;

    public function name(): string
    {
        return match ($this) {
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
