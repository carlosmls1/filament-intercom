<p class="filament-hidden">
<img src="https://banners.beyondco.de/filament-intercom.png?theme=light&packageManager=composer+require&packageName=carlosmls1%2Ffilament-intercom&pattern=architect&style=style_1&description=Easy+Intercom+integration+for+Filament&md=1&showWatermark=0&fontSize=100px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg" class="filament-hidden">
</p>

[![Latest Version on Packagist](https://img.shields.io/packagist/v/carlosmls1/filament-intercom.svg?style=flat-square)](https://packagist.org/packages/carlosmls1/filament-intercom)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/carlosmls1/filament-intercom/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/carlosmls1/filament-intercom/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/carlosmls1/filament-intercom/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/carlosmls1/filament-intercom/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/carlosmls1/filament-intercom.svg?style=flat-square)](https://packagist.org/packages/carlosmls1/filament-intercom)

A package to easily include Intercom in [Filament](https://filamentphp.com).

## Version Compatibility

| Plugin  | Filament | Laravel | PHP |
| ------------- | ------------- | ------------- | -------------|
| 1.x  | 3.x  | 10.x | 8.x |
| 1.x  | 3.x  | 11.x | 8.2 \| 8.3 |
## Installation

You can install the package via composer:

```bash
composer require carlosmls1/filament-intercom
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-intercom-config"
```

This is the contents of the published config file:

```php
return [

    'api_base' => env('FILAMENT_INTERCOM_API_BASE', false),

    'app_id' => env('FILAMENT_INTERCOM_APP_ID'),

];
```

## Usage

```php
->plugin(\carlosmls1\FilamentIntercom\FilamentIntercom::make())
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Carlos Morales](https://github.com/carlosmls1)
- [Marco Germani](https://github.com/marcogermani87)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
