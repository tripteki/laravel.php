<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfTokensMiddleware extends Middleware
{
    /**
     * @var array<int, string>
     */
    protected $except = [];
}
