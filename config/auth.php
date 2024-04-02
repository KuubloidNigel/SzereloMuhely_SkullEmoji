<?php

return [

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'user',
        ],
        
    'szerelo' => [
        'driver' => 'session',
        'provider' => 'szerelo', 
        ],

    'munkafelvevo' => [
        'driver' => 'session',
        'provider' => 'munkafelvevo',
        ],
    ],

    'providers' => [
        // 'users' => [
        //     'driver' => 'eloquent',
        //     'model' => App\Models\User::class,
        // ],
        'szerelo' => [
            'driver' => 'eloquent',
            'model' => App\Models\Szerelo::class,
        ],
    
        'munkafelvevo' => [
            'driver' => 'eloquent',
            'model' => App\Models\Munkafelvevo::class,
        ],
    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,

];
