# m4tthumphrey/fractal-laravel

Laravel bindings for the Fractal library.

## Install via Composer

Add the following to your `composer.json` file

```
{
    "require": {
        "m4tthumphrey/fractal-laravel" : "1.*"
    }
}
```

Then update composer

```
composer update
```

## Service provider

Add the following line to the array of `providers` in `app/config/app.php`

```php
'm4tthumphrey\FractalLaravel\ServiceProvider',
```

## Facade

If you wish to utilise the facade, add the following line to your `aliases` array, also in `app/config/app.php`

```php
'Fractal' => 'm4tthumphrey\FractalLaravel\Facade',
```
