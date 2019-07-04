<?php

$basePath = plugin_dir_path(__DIR__);

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most template systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views.
    |
    */

    'paths' => [
        "{$basePath}resources/views",
    ],

    /*
    |--------------------------------------------------------------------------
    | Compiled View Path
    |--------------------------------------------------------------------------
    |
    | This option determines where all the compiled Blade templates will be
    | stored for your application. Typically, this is within the uploads
    | directory. However, as usual, you are free to change this value.
    |
    */

    'compiled' => WP_CONTENT_DIR . '/uploads/actionnetwork/storage/framework/views',

    /*
    |--------------------------------------------------------------------------
    | View Namespaces
    |--------------------------------------------------------------------------
    |
    | Blade has an underutilized feature that allows developers to add
    | supplemental view paths that may contain conflictingly named views.
    | These paths are prefixed with a namespace to get around the conflicts.
    | A use case might be including views from within a plugin folder.
    |
    */

    'namespaces' => [
        'actionnetwork' => "{$basePath}resources/views",
    ],

    /*
    |--------------------------------------------------------------------------
    | View Composers
    |--------------------------------------------------------------------------
    |
    | View composers allow data to always be passed to certain views. This can
    | be useful when passing data to components such as hero elements,
    | navigation, banners, etc.
    |
    */

    'composers' => [
        ActionNetwork\Composers\Admin::class,
        ActionNetwork\Composers\Newsletter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | View Directives
    |--------------------------------------------------------------------------
    |
    | The namespaces where view components reside. Components can be referenced
    | with camelCase & dot notation.
    |
    */

    'directives' => [],
];
