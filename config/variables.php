<?php

return [

    'boolean' => [
        '0' => 'No',
        '1' => 'Si',
    ],

    'role' => [
        '0' => 'User',
        '1' => 'Manager',
        '4' => 'Admin',
        '5' => 'Superadmin',
    ],

    'status' => [
        '1' => 'Activo',
        '0' => 'Inactivo',
    ],

    'nivel' => [
        'Servidor' => 'Servidor',
        'Instancia' => 'Instancia',
    ],

    'avatar' => [
        'public' => '/files/avatar/',
        'folder' => public_path() . '/files/avatar/',

        'image' => [
            'width'  => 160,
            'height' => 160,
        ]
    ],

    /*
    |------------------------------------------------------------------------------------
    | ENV of APP
    |------------------------------------------------------------------------------------
    */
    'APP_ADMIN' => env('APP_ADMIN', 'admin'),
    'APP_TOKEN' => env('APP_TOKEN', 'admin123456'),
];
