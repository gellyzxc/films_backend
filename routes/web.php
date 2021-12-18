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

$router->get('/', 'FilmsController@main');

$router->get('api', 'FilmsController@help');
$router->get('api/all', 'FilmsController@all');
$router->post('api/0/create', 'FilmsController@create');
$router->get('api/{film_id}', 'FilmsController@show');
$router->post('api/{film_id}/edit', 'FilmsController@edit');
$router->get('api/{film_id}/delete', 'FilmsController@delete');
