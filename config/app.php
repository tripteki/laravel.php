<?php

use Illuminate\Support\Facades\Facade;

return [

    "name" => env("APP_NAME", "Basecode"),
    "url" => env("APP_URL", "http://localhost"),
    "asset_url" => env("ASSET_URL", ""),
    "env" => env("APP_ENV", "production"),
    "debug" => (bool) env("APP_DEBUG", false),

    "timezone" => env("APP_TIMEZONE", "UTC"),
    "locale" => env("APP_LOCALE", "en"),
    "fallback_locale" => env("APP_FALLBACKLOCALE", "en"),
    "faker_locale" => env("APP_FAKERLOCALE", "en_US"),

    "key" => env("APP_KEY"),
    "cipher" => "AES-256-CBC",

    /*
    | Supported: "file", "cache"
    */
    "maintenance" => [

        "driver" => "file",
    ],

    "providers" => [

        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        App\Providers\AuthServiceProvider::class,
        App\Providers\EventListenerServiceProvider::class,
        App\Providers\BroadcastServiceProvider::class,
        App\Providers\RouteServiceProvider::class,

        App\Providers\AppServiceProvider::class,
    ],

    "aliases" => Facade::defaultAliases()->merge([])->toArray(),

];
