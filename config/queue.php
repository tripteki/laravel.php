<?php

return [

    "default" => env("QUEUE_CONNECTION", "sync"),

    "connections" => [

        "sync" => [

            "driver" => "sync",
        ],

        "database" => [

            "driver" => "database",
            "table" => "jobs",
            "queue" => "job",
            "retry_after" => 90,
            "after_commit" => false,
        ],

        "redis" => [

            "driver" => "redis",
            "connection" => "queue",
            "queue" => "job",
            "retry_after" => 90,
            "block_for" => null,
            "after_commit" => false,
        ],
    ],

    "failed" => [

        "driver" => env("QUEUEFAILED_DRIVER", "database-uuids"),
        "database" => env("DB_CONNECTION", "mysql"),
        "table" => "failed_jobs",
    ],

];
