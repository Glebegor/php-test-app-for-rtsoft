<?php

return [
    'paths' => [
        'migrations' => __DIR__ . '/migrations',
        'seeds' => __DIR__ . '/seeds'
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_environment' => 'development',
        'production' => [
            'adapter' => 'mysql',
            'host' => '127.0.0.1',
            'name' => 'test', // Change this to match your database name
            'user' => 'root',
            'pass' => '123321',
            'port' => '3306',
            'charset' => 'utf8',
        ],
        'development' => [
            'adapter' => 'mysql',
            'host' => '127.0.0.1',
            'name' => 'test', // Change this to match your database name
            'user' => 'root',
            'pass' => '123321',
            'port' => '3306',
            'charset' => 'utf8',
        ],
        'testing' => [
            'adapter' => 'mysql',
            'host' => '127.0.0.1',
            'name' => 'test', // Change this to match your database name
            'user' => 'root',
            'pass' => '123321',
            'port' => '3306',
            'charset' => 'utf8',
        ]
    ],
    'version_order' => 'creation'
];
