<?php return [
    
    /*'default' => 'file',*/
    'default' => 'array',
    'stores' => [
        'apc' => [
            'driver' => 'apc'
        ],
        'array' => [
            'driver' => 'array'
        ],
        'database' => [
            'driver' => 'database',
            'table'  => 'cache',
            'connection' => null,
        ],
        'file' => [
            'driver' => 'file',
            'path'   => storage_path('framework/cache'),
        ],
        'memcached' => [
            'driver'  => 'memcached',
            'servers' => [
                [
                    'host'   => '127.0.0.1',
                    'port'   => 11211,
                    'weight' => 100,
                ],
            ],
        ],
        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
        ],
    ],
    'prefix' => 'managing',
    'codeParserDataCacheKey' => 'cms-php-file-data',
    'disableRequestCache' => null,
];
