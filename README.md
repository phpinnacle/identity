# PHPinnacle UUID

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

PHPinnacle UUID is simple wrap for Ramsey UUID library.

## Install

Via Composer

``` bash
$ composer require phpinnacle/identity
```

## Basic Usage

``` php
<?php

require __DIR__ . '/vendor/autoload.php';

use PHPinnacle\UUID;

$random = UUID::random();
$time = UUID::time();
$url = UUID::url('example.com');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email dev@phpinnacle.com instead of using the issue tracker.

## Credits

- [PHPinnacle][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/phpinnacle/identity.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/phpinnacle/identity/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/phpinnacle/identity.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/phpinnacle/identity.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/phpinnacle/identity.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/phpinnacle/identity
[link-travis]: https://travis-ci.org/phpinnacle/identity
[link-scrutinizer]: https://scrutinizer-ci.com/g/phpinnacle/identity/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/phpinnacle/identity
[link-downloads]: https://packagist.org/packages/phpinnacle/identity
[link-author]: https://github.com/phpinnacle
[link-contributors]: ../../contributors
