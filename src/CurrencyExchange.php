<?php

namespace Mamun\CurrencyExchange;

class CurrencyExchange
{
    /**
     * The default currency
     *
     * @var string
     */
    private $defaultCurrency;

    /**
     * Request builder
     */
    private $requestBuilder;

    public function __construct()
    {
        $this->defaultCurrency = config('currency-exchange.default_currency');
        $this->requestBuilder = new RequestBuilder();
    }

    /**
     * Convert to currency
     *
     * @param float $value
     * @param string $convertTo
     *
     * @return string|void
     * @throws \Exception
     */
    public function convert(float $value, string $convertTo)
    {
        $currencyUppercase = strtoupper($convertTo);

        if ($this->defaultCurrency === $currencyUppercase) {
            return $value.$currencyUppercase;
        }

        $response = $this->requestBuilder->makeRequest();

        foreach ($response as $object) {
            $arrayRes = (array) $object;

            if ($arrayRes['@attributes']?->currency === $currencyUppercase){
                return $arrayRes['@attributes']?->rate * $value.$currencyUppercase;
            }

            return throw new \Exception('Currency is not available for conversion!');
        }
    }
}
