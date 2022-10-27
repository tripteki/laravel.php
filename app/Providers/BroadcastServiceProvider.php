<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot()
    {
        if (Request::hasHeader("Authorization")) {
            Broadcast::routes([ "prefix" => "api", "middleware" => "auth:api", ]);
        }
        else {
            Broadcast::routes();
        }

        require base_path("routes/_channel.php");
    }
}
