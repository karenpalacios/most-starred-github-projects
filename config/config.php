<?php

return [
    'application' => [
        'BASEPATH' => '/var/www/html/symphonygit/',
        'APPNAME' => 'git2'
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