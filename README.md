# Currency Exchange rate

## Installation

You can install the package via composer:

- Clone this repository to your root laravel project directory
- Run

```bash
composer config repositories.local '{"type": "path", "url": "./exchange-rate"}' --file composer.json
```

```bash
composer require mamun/currency-exchange
```

## Usage

```php
$currencyExchange = new \Mamun\CurrencyExchange\CurrencyExchange();
$result = $currencyExchange->convert(20, 'usd');

// $result: '21.552USD'
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email mamun167359@gmail.com instead of using the issue tracker.

## Credits

-   [Abdullah Al Mamun](https://github.com/mamun)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
