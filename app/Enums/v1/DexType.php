<?php

declare(strict_types=1);

namespace App\Enums\v1;

enum DexType: string
{
    case NATIONAL = 'national';
    case GENERATIONAL = 'generational';
    case REGIONAL = 'regional';
}
