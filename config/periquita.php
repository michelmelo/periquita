<?php

use MichelMelo\Periquita\UI\Components;

return [

    /*
    |--------------------------------------------------------------------------
    | Components
    |--------------------------------------------------------------------------
    |
    | Below you reference all components that should be loaded for your app.
    | By default all components from Periquita are loaded in. You can
    | disable or overwrite any component class or alias that you want.
    |
     */

    'components' => [
        'alert'  => Components\Alert::class,
        'device' => Components\Device::class,
        'error'  => Components\Error::class,
        'icon'   => Components\Icon::class,
        'logout' => Components\Logout::class,
        'meta'   => Components\Meta::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Icons Path
    |--------------------------------------------------------------------------
    |
    | Provide the path from your app to your SVG icons directory.
    |
    | Example: [ 'fa' => storage_path('app/fontawesome') ]
     */

    'icons'      => [

    ],
];
