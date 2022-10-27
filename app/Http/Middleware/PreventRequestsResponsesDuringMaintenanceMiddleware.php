<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;

class PreventRequestsResponsesDuringMaintenanceMiddleware extends Middleware
{
    /**
     * @var array<int, string>
     */
    protected $except = [];
}
