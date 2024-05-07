<?php

return
[
    'paths' => [
        'migrations' => __DIR__ . '/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/db/seeds'
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_environment' => 'development',
        'production' => [
            'adapter' => 'mysql',
            'host' => 'ipw',
            'name' => 'ipw',
            'user' => 'root',
            'pass' => '123321',
            'port' => '3306',
            'charset' => 'utf8',
        ],
        'development' => [
            'adapter' => 'mysql',
            'host' => 'ipw',
            'name' => 'ipw',
            'user' => 'root',
            'pass' => '123321',
            'port' => '3306',
            'charset' => 'utf8',
        ],
        'testing' => [
            'adapter' => 'mysql',
            'host' => 'ipw',
            'name' => 'ipw',
            'user' => 'root',
            'pass' => '123321',
            'port' => '3306',
            'charset' => 'utf8',
        ]
    ],
    'version_order' => 'creation'
];
