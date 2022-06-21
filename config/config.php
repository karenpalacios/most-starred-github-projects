<?php

return [
    'application' => [
        'base_path' => '/var/www/html/symphonygit/',
        'app_name' => 'git2'
    ],    
    'database' => [
        'mysql' => [
            'driver' => 'mysql',
            'url' => 'DATABASE_URL',
            'host' => 'DB_HOST', '127.0.0.1',
            'port' => 'DB_PORT', '3306',
            'database' => 'DB_DATABASE', 'forge',
            'username' => 'DB_USERNAME', 'forge',
            'password' => 'DB_PASSWORD', '',
            'prefix' => ''
        ]
    ],
];