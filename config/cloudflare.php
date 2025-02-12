<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cloudflare API Key
    |--------------------------------------------------------------------------
    |
    | The Cloudflare API Key is used to authenticate your requests.
    |
    */

    'key' => env('CLOUDFLARE_API_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Cloudflare Account ID
    |--------------------------------------------------------------------------
    |
    | The Cloudflare Account ID is used to authenticate your requests.
    |
    */

    'account_id' => env('CLOUDFLARE_ACCOUNT_ID'),

    /*
    |--------------------------------------------------------------------------
    | Cloudflare URL
    |--------------------------------------------------------------------------
    |
    | The Cloudflare URL is used to authenticate your requests.
    |
    */

    'url' => env('CLOUDFLARE_URL', 'https://api.cloudflare.com/client/v4/accounts/'),

];
