<?php

return [
    'guard' => [
        'customer' => [
            'driver' => 'session',
            'provider' => 'customer',
        ],

        'admin' => [
            'driver' => 'session',
            'provider' => 'admin',
        ],
    ],

    'provider' => [
        'customer' => [
            'driver' => 'eloquent',
            'model' => 'App\Models\Customer',
        ],

        'admin' => [
            'driver' => 'eloquent',
            'model' => 'App\Models\Admin',
        ],
    ],

];


