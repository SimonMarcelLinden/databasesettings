# DatabaseSettings for Laravel/Lumen

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]

DatabaseSettings is a package to easily store settings in the database and retrieve the setting using config('settings').

## Installation

Via Composer

``` bash
$ composer require simonmarcellinden/databasesettings
```

Register the package's service provider in config/app.php. In Laravel versions 5.5 and beyond, this step can be skipped if package auto-discovery is enabled.

Open and add the service provider to `bootstrap/app.php`
```php
	$app->register(\SimonMarcelLinden\DatabaseSettings\DatabaseSettingsProvider::class);
```

### Publish the configurations
~~Run this on the command line from the root of your project:~~
```
$ no config needed
```

Run the migrations to add the required tables to your database.
```php 
$ php artisan migrate:fresh
```
Run seed for example settings
```php 
$ php artisan db:seed --class=SimonMarcelLinden\DatabaseSettings\Database\Seeders\SettingSeeder
```

## Default Routes 

Default routes for store/update & view setting

```php
	$router->group(['prefix' => 'image'], function () use ($router) {
		$router->get('/{id}', 'ImageController@show');
		$router->post('/upload', 'ImageController@upload');
		$router->delete('/delete/{id}', 'ImageController@delete');
	});
```

Add a Script or Style Source directly into your route or controller

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email info@snerve.de instead of using the issue tracker.


[ico-version]: https://img.shields.io/packagist/v/simonmarcellinden/databasesettings.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/simonmarcellinden/databasesettings.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/simonmarcellinden/databasesettings/master.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/simonmarcellinden/databasesettings
[link-downloads]: https://packagist.org/packages/simonmarcellinden/databasesettings
[link-travis]: https://travis-ci.org/simonmarcellinden/databasesettings
[link-author]: https://github.com/simonmarcellinden
[link-contributors]: ../../contributors
