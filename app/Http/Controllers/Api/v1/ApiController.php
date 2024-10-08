<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\v1;

use Illuminate\Support\Facades\Gate;

class ApiController
{
    protected string $policyClass;

    public function __construct()
    {
        Gate::guessPolicyNamesUsing(function () {
            return $this->policyClass;
        });
    }
}
