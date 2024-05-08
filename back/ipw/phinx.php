<?php
require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__, '.env');
$dotenv->load();

var_dump($_ENV);


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
            'host' => $_ENV['DATABASE_HOST'],
            'name' => $_ENV['DATABASE_NAME'],
            'user' => $_ENV['DATABASE_USER'],
            'pass' => $_ENV['DATABASE_ROOT_PASSWORD'],
            'port' => $_ENV['DATABASE_PORT'],
            'charset' => $_ENV['DATABASE_CODING'],
        ],
        'development' => [
            'adapter' => 'mysql',
            'host' => $_ENV['DATABASE_HOST'],
            'name' => $_ENV['DATABASE_NAME'],
            'user' => $_ENV['DATABASE_USER'],
            'pass' => $_ENV['DATABASE_ROOT_PASSWORD'],
            'port' => $_ENV['DATABASE_PORT'],
            'charset' => $_ENV['DATABASE_CODING'],
        ],
        'testing' => [
            'adapter' => 'mysql',
            'host' => $_ENV['DATABASE_HOST'],
            'name' => $_ENV['DATABASE_NAME'],
            'user' => $_ENV['DATABASE_USER'],
            'pass' => $_ENV['DATABASE_ROOT_PASSWORD'],
            'port' => $_ENV['DATABASE_PORT'],
            'charset' => $_ENV['DATABASE_CODING'],
        ]
    ],
    'version_order' => 'creation'
];
