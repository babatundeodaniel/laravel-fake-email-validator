# A useful validation rule to check fake emails and dump emails

[![Latest Version on Packagist](https://img.shields.io/packagist/v/getripay/getripay-verify-fake-emails.svg?style=flat-square)](https://packagist.org/packages/getripay/getripay-verify-fake-emails)
[![Build Status](https://img.shields.io/travis/getripay/getripay-verify-fake-emails/master.svg?style=flat-square)](https://travis-ci.org/getripay/getripay-verify-fake-emails)
[![Quality Score](https://img.shields.io/scrutinizer/g/getripay/getripay-verify-fake-emails.svg?style=flat-square)](https://scrutinizer-ci.com/g/getripay/getripay-verify-fake-emails)
[![Total Downloads](https://img.shields.io/packagist/dt/getripay/getripay-verify-fake-emails.svg?style=flat-square)](https://packagist.org/packages/getripay/getripay-verify-fake-emails)

The package checks the input email against an updated list of known temporary email host.

## Installation

You can install the package via composer:

```bash
composer require babatundeodaniel/laravel-fake-email-validator
```
To customize the configuration file, publish the package configuration using Artisan.

```bash
php artisan vendor:publish --provider="Getripay\GetripayVerifyFakeEmails\GetripayVerifyFakeEmailsServiceProvider"
```
You can then edit the generated config at app/config/config/getripay_verify_fake_emails.php.
## Usage

``` php
// Add rule to your laravel validation like this.
public function rules()
{
    return [
        'emails' => ['not_fake_email'],
    ];
}
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email obabatundedaniel@gmail.com instead of using the issue tracker.

## Credits

- [Daniel Babatunde](https://github.com/getripay)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).