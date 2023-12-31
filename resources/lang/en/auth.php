<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => 'Sai tên đăng nhập hoặc mật khẩu',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',

    //b1 setting 
    'guards' => [
        'tbc' => [
            'driver' => 'session',
            'provider' => 'tbc',
        ],
        'bc' => [
            'driver' => 'session',
            'provider' => 'bc',
        ],
    ],

    'providers' => [
        'tong_buu_cuc' => [
            'driver' => 'eloquent',
            'model' => App\TBC::class,
        ],
        'buu_cuc' => [
            'driver' => 'eloquent',
            'model' => App\BC::class,
        ],
    ],


];
