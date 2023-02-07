<?php
namespace Mamun\CurrencyExchange\Tests\Unit;

use Mamun\CurrencyExchange\CurrencyExchange;

class ConvertTest extends TestCase
{
    public function convert_euro_value_to_usd()
    {
        $currencyExchange = new CurrencyExchange();
        $result = $currencyExchange->convert(20, 'usd');
        $this->assertEquals('21.552USD', $result);
    }
}
