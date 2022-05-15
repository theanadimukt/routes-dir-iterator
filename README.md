# Routes Directory Iterator

[![Latest Version on Packagist](https://img.shields.io/packagist/v/anadimukt/routes-dir-iterator.svg?style=flat-square)](https://packagist.org/packages/anadimukt/routes-dir-iterator)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/anadimukt/routes-dir-iterator/run-tests?label=tests)](https://github.com/anadimukt/routes-dir-iterator/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/anadimukt/routes-dir-iterator/Check%20&%20fix%20styling?label=code%20style)](https://github.com/anadimukt/routes-dir-iterator/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/anadimukt/routes-dir-iterator.svg?style=flat-square)](https://packagist.org/packages/anadimukt/routes-dir-iterator)

This package contains a `RoutesDirIterator` facade class that you can use to register segregate routes from nested directories at one place.

## Installation

You can install the package via composer:

```bash
composer require anadimukt/routes-dir-iterator
```

## Usage

For example, routes for admin and guest has written in seperate files in nested directory structure for clean code.

```
routes
├── admin
│   ├── posts.php
│   ├── routes.php
│   └── settings
│       ├── permissions.php
│       └── roles.php
├── guest
│   └── routes.php
└── web.php
```

posts.php - Add relevent routes to file

```php
use Illuminate\Support\Facades\Route;

Route::get('/posts', function () {
    return view('admin.posts.index');
});

```

web.php - Use of package's `RoutesDirIterator` facade class.

```php
use Anadimukt\RoutesDirIterator\Facades\RoutesDirIterator;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        RoutesDirIterator::read(__DIR__ . "/admin");
    });

Route::middleware('guest')
    ->group(function () {
        RoutesDirIterator::read(__DIR__ . "/guest");
    });
```

Under the hood package will do the necessary work to register all segreagated routed and make it publishable.

List all published routes in using command

```bash
php artisan route:list
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Sagar](https://github.com/sagarpatel9697)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
