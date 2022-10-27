<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    public const HOME = "/home";

    /**
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimit();

        $this->routes(function () {
            Route::prefix("api")->middleware("api")->namespace($this->namespace)->group(base_path("routes/api.php"));
            Route::middleware("web")->namespace($this->namespace)->group(base_path("routes/web.php"));
        });
    }

    /**
     * @return void
     */
    protected function configureRateLimit()
    {
    }
}
