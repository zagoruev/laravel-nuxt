# Laravel Nuxt

This package allows you to build a SPA with Laravel and Nuxt.

## Installation

```bash
composer require pallares/laravel-nuxt
```

In Laravel 5.5 the service provider will automatically get registered. In older versions of the framework just add the service provider in `config/app.php` file:

```php
return [
  // ...
  'providers' => [
      // ...
      Zagoruev\LaravelNuxt\LaravelNuxtServiceProvider::class,
  ],
];
```

You need to add a fallback route that will render the SPA page in `routes/web.php` file:

```php
// ...
// Add this route the last, so it doesn't interfere with your other routes.
Route::get(
    '{uri}',
    '\\'.Zagoruev\LaravelNuxt\Controllers\NuxtController::class
)->where('uri', '.*');
```

If you want to change Nuxt build location feel free to publish config and edit it:
```bash
php artisan vendor:publish --provider="Zagoruev\Lighthouse\LighthouseServiceProvider" --tag=config
```
