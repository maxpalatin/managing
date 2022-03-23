<?php return [
    
    'debug' => true,
    'name' => 'Palatin.WTF',
    'url' => 'https://palatin.wtf/',
    'timezone' => 'UTC',
    'locale' => 'ru',
    'fallback_locale' => 'en',
    'key' => 'YViqYL0YhTgo0HfPPb9rGfnGEEpfpT8Z',
    'cipher' => 'AES-256-CBC',
    'log' => 'errorlog',
    'providers' => array_merge(include(base_path('modules/system/providers.php')), [
        // 'Illuminate\Html\HtmlServiceProvider', // Example
        'System\ServiceProvider',
    ]),
    'aliases' => array_merge(include(base_path('modules/system/aliases.php')), [
        // 'Str' => 'Illuminate\Support\Str', // Example
    ]),
];
