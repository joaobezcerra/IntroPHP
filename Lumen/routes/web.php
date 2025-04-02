<?php

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/token', 'TokenController@criaToken');

$router->group(['prefix' => 'api', 'middleware' => 'autenticador'], function () use ($router) {
    $router->group(['prefix' => 'series'], function () use ($router){
        $router->get('', 'SeriesController@index');
        $router->get('{id}', 'SeriesController@show');
        $router->put('{id}', 'SeriesController@update');
        $router->delete('{id}', 'SeriesController@destroy');
        $router->post('', 'SeriesController@store');

        $router->get('{serie_id}/episodios', 'EpisodiosController@buscaPorEpisodios');
    });
    $router->group(['prefix' => 'episodios'], function () use ($router){
        $router->get('', 'EpisodiosController@index');
        $router->get('{id}', 'EpisodiosController@show');
        $router->put('{id}', 'EpisodiosController@update');
        $router->delete('{id}', 'EpisodiosController@destroy');
        $router->post('', 'EpisodiosController@store');
    });
});
