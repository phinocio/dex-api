<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Form extends Model
{
    /** @return BelongsTo<Pokemon, Form> */
    public function pokemon(): BelongsTo
    {
        return $this->belongsTo(Pokemon::class);
    }
}
