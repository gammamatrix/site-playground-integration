# Playground Site Blade

[![Playground CI Workflow](https://github.com/gammamatrix/site-playground-blade-sanctum/actions/workflows/ci.yml/badge.svg?branch=develop)](https://raw.githubusercontent.com/gammamatrix/site-playground-blade-sanctum/testing/develop/testdox.txt)
[![Test Coverage](https://raw.githubusercontent.com/gammamatrix/site-playground-blade-sanctum/testing/develop/coverage.svg)](tests)
[![PHPStan Level 9 src and tests](https://img.shields.io/badge/PHPStan-level%209-brightgreen)](.github/workflows/ci.yml#L120)

The Playground Blade for [Laravel](https://laravel.com/docs/10.x) applications.


## Testing

```sh
composer test
```

## PHPStan

Tests at level 9 on:
- `app/`
- `config/`
- `database/`
- `resources/views/`
- `tests/Feature/`
- `tests/Unit/`
- and on Playground packages.

```sh
composer analyse
```

## Coding Standards

```sh
composer format
```

## `artisan about`

Playground packages provides information in the `artisan about` command.


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Jeremy Postlethwaite](https://github.com/gammamatrix)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
