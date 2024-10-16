<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class GameGameDex extends Pivot
{
    protected $table = 'game_game_dex';
}
