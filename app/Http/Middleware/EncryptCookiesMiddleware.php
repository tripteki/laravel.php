<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookiesMiddleware extends Middleware
{
    /**
     * @var array<int, string>
     */
    protected $except = [];
}
