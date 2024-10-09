<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sprite extends Model
{
    /** @return BelongsTo<Pokemon, Sprite> */
    public function pokemon(): BelongsTo
    {
        return $this->belongsTo(Pokemon::class);
    }

    /** @return array<string, string> */
    protected function casts(): array
    {
        return [
            'shiny' => 'boolean',
        ];
    }
}
