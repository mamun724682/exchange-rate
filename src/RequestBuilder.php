<?php

namespace Mamun\CurrencyExchange;

use Illuminate\Support\Facades\Http;

class RequestBuilder
{
    /**
     * The base URL for the Exchange Rates API.
     *
     * @var string
     */
    private $baseUrl;

    /**
     * RequestBuilder constructor.
     */
    public function __construct()
    {
        $this->baseUrl = config('currency-exchange.api_url');
    }

    /**
     * Make an API request.
     *
     * @return mixed
     */
    public function makeRequest()
    {
        $url = $this->baseUrl;

        $xml_response = Http::get($url);

        //Convert xml
        return json_decode(json_encode(simplexml_load_string($xml_response->body())))?->Cube?->Cube?->Cube;
    }
}
