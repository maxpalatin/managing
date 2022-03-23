<?php return [

    'fetch' => PDO::FETCH_CLASS,
    'default' => 'mysql',

    'connections' => [
        'sqlite' => [
            'driver'   => 'sqlite',
            'database' => 'storage/database.sqlite',
            'prefix'   => '',
        ],
        'mysql' => [
            'driver'     => 'mysql',
            'engine'     => 'InnoDB',
            'host'       => 'localhost',
            'port'       => 3306,
            'database'   => 'aromafetish1',
            'username'   => 'stamedia',
            'password'   => '0O3c6A4n',
            'charset'    => 'utf8mb4',
            'collation'  => 'utf8mb4_unicode_ci',
            'prefix'     => '',
            'varcharmax' => 191,
        ],
        'pgsql' => [
            'driver'   => 'pgsql',
            'host'     => 'localhost',
            'port'     => 5432,
            'database' => 'database',
            'username' => 'root',
            'password' => '',
            'charset'  => 'utf8',
            'prefix'   => '',
            'schema'   => 'public',
        ],
        'sqlsrv' => [
            'driver'   => 'sqlsrv',
            'host'     => 'localhost',
            'port'     => 1433,
            'database' => 'database',
            'username' => 'root',
            'password' => '',
            'prefix'   => '',
        ],

    ],

    'migrations' => 'migrations',

    'redis' => [
        'cluster' => false,
        'default' => [
            'host'     => '127.0.0.1',
            'password' => null,
            'port'     => 6379,
            'database' => 0,
        ],
    ],

    'useConfigForTesting' => false,
];
