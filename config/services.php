<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'google' => [
        'client_id' => '331709663044-ri6basml00uvrrvsto2i03dukd56um3m.apps.googleusercontent.com',
        'client_secret' => 'rJn9F2afW8Vph-TL1Ykga7Ac',
        // 'redirect' => 'http://is421carlot.local.com:8000/auth/google/callback', 
        // 'redirect' => 'https://pupsnfluff.herokuapp.com/auth/google/callback', #dennis
        'redirect' => 'https://laravel-qa.herokuapp.com/auth/google/callback', #laravel-qa
        // 'redirect' => 'http://www.puppiesandfluffies.com/auth/google/callback', #laravel-db maybe
    ],

];
