<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventListenerServiceProvider extends ServiceProvider
{
    /**
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [];

    /**
     * @return void
     */
    public function boot()
    {
    }

    /**
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
