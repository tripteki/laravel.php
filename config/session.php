<?php

use Illuminate\Support\Str;

return [

    /*
    | Supported: "file", "cookie", "database", "apc", "memcached", "redis", "array"
    */
    "driver" => env("SESSION_DRIVER", "file"),

    "lifetime" => 120,
    "lottery" => [ 2, 100 ],
    "expire_on_close" => false,
    "encrypt" => false,

    /*
    | Driver: "file"
    */
    "files" => storage_path("framework/sessioning"),

    /*
    | Driver: "cookie"
    */
    "cookie" => Str::slug(env("APP_NAME"), "_")."_session-cookie",
    "path" => "/",
    "domain" => null,
    "same_site" => "lax",
    "http_only" => true,
    "secure" => true,

    /*
    | Driver: "database"
    */
    "connection" => "session",
    "table" => "sessions",

    /*
    | Driver: "apc", "memcached", "redis"
    */
    "store" => null,

];
