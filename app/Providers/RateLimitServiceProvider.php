<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\ServiceProvider;
use RateLimiter;

class RateLimitServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        RateLimiter::for(
            'api',
            static fn(): Limit => Limit::perMinute(60),
        );

        RateLimiter::for(
            "auth",
            static fn(): Limit => Limit::perMinute(5),
        );
    }
}
