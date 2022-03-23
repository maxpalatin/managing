<?php return [

    'driver' => 'file',
    'lifetime' => 60,
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => storage_path('framework/sessions'),
    'connection' => null,
    'table' => 'sessions',
    'lottery' => [2, 100],
    'cookie' => 'managing_session',
    'path' => '/',
    'domain' => null,
    'http_only' => true,
    'secure' => false,
    'same_site' => null,
];
