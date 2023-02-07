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

    public function __construct(private RequestBuilder $requestBuilder)
    {
        $this->defaultCurrency = config('currency-exchange.default_currency');
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
