# laravel-ip-whitelist
[![Latest Version on Packagist](https://img.shields.io/packagist/v/alitindrawan24/laravel-ip-whitelist.svg?style=flat-square)](https://packagist.org/packages/alitindrawan24/laravel-ip-whitelist)
[![Total Downloads](https://poser.pugx.org/alitindrawan24/laravel-ip-whitelist/downloads)](https://packagist.org/packages/alitindrawan24/laravel-ip-whitelist)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

Laravel IP Whitelist is a package contain middleware to allow a list of IP addresses to access a specific web resource.

## Installation

You can install the package via composer:

```bash
composer require alitindrawan24/laravel-ip-whitelist
```

You can publish the config file with:

```bash
php artisan vendor:publish --provider="Alitindrawan24\IPWhitelist\IPWhitelistServiceProvider" --tag="config" 
```

By default the IP Whitelist feature is disabled, to enable the feature you add this in your .env

```bash
IP_WHITELIST_ENABLE=true
```

You can add the list of IP that allowed in config/ip-whitelist.php

```php
/**
 * List of IP Whitelist.
 * Only IP in this list is allowed to pass the middleware.
 */
'ip_whitelist' => [
    // '127.0.0.1' // Localhost example
],
```

## Usage

This packages provides a middleware which can be added as a global middleware or as a single route.

```php
// in `app/Http/Kernel.php`

protected $middleware = [
    // ...
    
    \Alitindrawan24\IPWhitelist\Middleware\HttpLogger::class
];
```

```php
// in a routes file

Route::post('/dashboard', function () {
    //
})->middleware(\Alitindrawan24\IPWhitelist\Middleware\HttpLogger::class);
```

## License
This project is licensed under the MIT License - see the [LICENSE.md](https://github.com/MarketingPipeline/README-Quotes/blob/main/LICENSE) file for details.

## Contributors
<a href="https://github.com/Alitindrawan24/laravel-ip-whitelist/graphs/contributors">
  <img src="https://contrib.rocks/image?repo=Alitindrawan24/laravel-ip-whitelist" />
</a>
