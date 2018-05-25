<?php

return [
    'default' => 'mysql',
    
    'connections' => [
        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_NAME', 'racine'),
            'user' => env('DB_USER', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8'
        ]
    ]
];