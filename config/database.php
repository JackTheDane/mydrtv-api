<?php

return ['connections' => [
            'neo4j' => [
                'driver' => 'neo4j',
                'host'   => env('DB_HOST', 'bolt://178.63.46.163'),
                'port'   => env('DB_PORT', '7687'),
                'username' => env('DB_USERNAME', 'neo4j'),
                'password' => env('DB_PASSWORD', 'qw12qw12')
            ]
        ]
    ];
