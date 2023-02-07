<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'api_url' => env('EXCHANGE_RATES_API_URL', 'https://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml'),

    'default_currency' => 'EUR',
];
