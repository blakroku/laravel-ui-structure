# An unopionionated, ready to install Blade folder structure for Laravel UI

[![Latest Version on Packagist](https://img.shields.io/packagist/v/blakroku/laravel-ui-structure.svg?style=flat-square)](https://packagist.org/packages/blakroku/laravel-ui-structure)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/blakroku/laravel-ui-structure/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/blakroku/laravel-ui-structure/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/blakroku/laravel-ui-structure/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/blakroku/laravel-ui-structure/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/blakroku/laravel-ui-structure.svg?style=flat-square)](https://packagist.org/packages/blakroku/laravel-ui-structure)


## Installation

You can install the package via composer:

```bash
composer require blakroku/laravel-ui-structure
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-ui-structure-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-ui-structure-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-ui-structure-views"
```

## Usage

```php
$laravelUiStructure = new Blakroku\LaravelUiStructure();
echo $laravelUiStructure->echoPhrase('Hello, Blakroku!');
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Kwame Adoko](https://github.com/blakroku)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
