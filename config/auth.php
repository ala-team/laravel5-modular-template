<?php

return [

    'admin' => [
        'driver' => 'eloquent',
        'model' => 'App\Admin',
        'table' => 'admins',
        'password' => [
            'email' => 'emails.auth.password',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],
    
    /*
    *
    *frontend
    *
    */
    'frontend' => [
        'driver' => 'eloquent',
        'model' => 'App\User',
        'table' => 'users',
        'password' => [
            'email' => 'emails.password',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

];