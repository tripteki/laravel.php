<?php

namespace App\Exceptions;

use Throwable;
use Error;
use Exception;
use Closure;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [];

    /**
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [];

    /**
     * @var array<int, string>
     */
    protected $dontFlash = [

        // "current_password",
        // "password",
        // "password_confirmation",
    ];

    /**
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $thrower) {
        });
    }
}
