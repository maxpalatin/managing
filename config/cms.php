<?php return [

    /* Custom */
    'auto_update_plugins' => false,
    'auto_update_templates' => false,
    'activeTheme' => 'managing',
    'edgeUpdates' => false,
    'backendUri' => '/auth',
    'backendForceSecure' => false,
    'backendForceRemember' => true,
    'backendTimezone' => 'UTC+3',
    'backendSkin' => 'Backend\Skins\Standard',
    'runMigrationsOnLogin' => null,
    'loadModules' => ['System', 'Backend', 'Cms'],
    'disableCoreUpdates' => true,
    'disablePlugins' => [],
    'enableRoutesCache' => false,
    'urlCacheTtl' => 10,
    'parsedPageCacheTTL' => 10,
    'enableAssetCache' => false,
    'enableAssetMinify' => null,
    'enableAssetDeepHashing' => null,
    'databaseTemplates' => false,
    'pluginsPath' => '/plugins',
    'templatesPath' => '/templates',
    'storage' => [
        'uploads' => [
            'disk'            => 'local',
            'folder'          => 'uploads',
            'path'            => '/storage/app/uploads',
            'temporaryUrlTTL' => 3600,
        ],
        'media' => [
            'disk'   => 'local',
            'folder' => 'media',
            'path'   => '/storage/app/media',
        ],
    ],
    'convertLineEndings' => false,
    'linkPolicy' => 'detect',
    'defaultMask' => ['file' => '644', 'folder' => '755'],
    'enableSafeMode' => null,
    'enableCsrfProtection' => true,
    'forceBytecodeInvalidation' => true,
    'enableTwigStrictVariables' => false,
    'restrictBaseDir' => true,
    'enableBackendServiceWorkers' => false,
];