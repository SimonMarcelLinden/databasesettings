<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$router = $this->app->router;

$router->group([], function () use ($router) {
	$router->get('/settings', 'SimonMarcelLinden\DatabaseSettings\Http\Controllers\SettingController@index');
	$router->post('/settings', 'SimonMarcelLinden\DatabaseSettings\Http\Controllers\SettingController@store');
	$router->patch('/settings', 'SimonMarcelLinden\DatabaseSettings\Http\Controllers\SettingController@update');
	$router->get('/settings/{key:.*}', 'SimonMarcelLinden\DatabaseSettings\Http\Controllers\SettingController@show');
});
