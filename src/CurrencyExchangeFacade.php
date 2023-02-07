<?php

namespace Mamun\CurrencyExchange;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mamun\CurrencyExchange\Skeleton\SkeletonClass
 */
class CurrencyExchangeFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'currency-exchange';
    }
}
