<?php

declare(strict_types=1);

namespace App\Enums;

enum DexType: string
{
    case NATIONAL = 'national';
    case GENERATIONAL = 'generational';
    case REGIONAL = 'regional';
}
