<?php

namespace App\Http\Middleware;

use Illuminate\Routing\Middleware\ValidateSignature as Middleware;

class ValidateSignatureMiddleware extends Middleware
{
    /**
     * @var array<int, string>
     */
    protected $except = [

        // "fbclid",
        // "utm_campaign",
        // "utm_content",
        // "utm_medium",
        // "utm_source",
        // "utm_term",
    ];
}
