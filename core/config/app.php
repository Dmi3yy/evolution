<?php
return [
    'timezone' => 'UTC',
    'debug' => false,
    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by the translation service provider. You are free to set this value
    | to any of the locales which will be supported by the application.
    |
    */
    'locale' => 'en',
    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    |
    | The fallback locale determines the locale to use when the current one
    | is not available. You may change the value to correspond to any of
    | the language folders that are provided through your application.
    |
    */
    'fallback_locale' => 'en',
    'providers' => [
        /**
         * Keys are needed only for the convenience of replace ServiceProvider class
         * via custom/config/app/providers/*.php
         */
        'Laravel_View' => Illuminate\View\ViewServiceProvider::class,
        'Laravel_Database' => Illuminate\Database\DatabaseServiceProvider::class,
        'Laravel_Filesystem' => Illuminate\Filesystem\FilesystemServiceProvider::class,
        'Laravel_Pagination' => Illuminate\Pagination\PaginationServiceProvider::class,
        'Laravel_Cache' =>  Illuminate\Cache\CacheServiceProvider::class,
        'Laravel_Lang' => Illuminate\Translation\TranslationServiceProvider::class,

        'Bootstrap_ExceptionHandler' => EvolutionCMS\Providers\ExceptionHandlerProvider::class,
        'Evolution_Events' => EvolutionCMS\Providers\EventServiceProvider::class,
        'Evolution_DBAPI' => EvolutionCMS\Providers\DatabaseProvider::class,
        'Evolution_DEPRECATED' => EvolutionCMS\Providers\DeprecatedCoreProvider::class,
        'Evolution_EXPORT_SITE' => EvolutionCMS\Providers\ExportSiteProvider::class,
        'Evolution_MODxMailer' => EvolutionCMS\Providers\MailProvider::class,
        'Evolution_makeTable' => EvolutionCMS\Providers\MakeTableProvider::class,
        'Evolution_ManagerAPI' => EvolutionCMS\Providers\ManagerApiProvider::class,
        'Evolution_MODIFIERS' => EvolutionCMS\Providers\ModifiersProvider::class,
        'Evolution_phpass' => EvolutionCMS\Providers\PasswordHashProvider::class,
        'Evolution_PHPCOMPAT' => EvolutionCMS\Providers\PhpCompatProvider::class,
        'Evolution_DocBlock' => EvolutionCMS\Providers\DocBlockProvider::class,
        'Evolution_ManagerTheme' => EvolutionCMS\Providers\ManagerThemeServiceProvider::class
    ],

    'aliases' => [
        'Cache' => Illuminate\Support\Facades\Cache::class,
        'Config' => Illuminate\Support\Facades\Config::class,
        'Blade' => Illuminate\Support\Facades\Blade::class,
        'DB' => Illuminate\Support\Facades\DB::class,
        'Eloquent' => Illuminate\Database\Eloquent\Model::class,
        'Event' => Illuminate\Support\Facades\Event::class,
        'File' => Illuminate\Support\Facades\File::class,
        'Log' => Illuminate\Support\Facades\Log::class,
        'Storage' => Illuminate\Support\Facades\Storage::class,
        'Lang' => Illuminate\Support\Facades\Lang::class,
        'Schema' => Illuminate\Support\Facades\Schema::class,
        'View' => Illuminate\Support\Facades\View::class,
        /**
         * EvolutionCMS
         * @TODO DBAPI, MakeTable and other will be added at version 2.1
         */
        'Evo' => Illuminate\Support\Facades\App::class,
        'DocBlock' => EvolutionCMS\Facades\DocBlock::class,
        'ManagerTheme' => EvolutionCMS\Facades\ManagerTheme::class
    ]
];
