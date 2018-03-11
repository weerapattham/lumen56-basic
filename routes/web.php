<?php

//$router->get('/', function () use ($router) {
//    return $router->app->version();
//});

$router->group([], function () use ($router) {
    $router->get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
    $router->get('/about', ['as' => 'about', 'uses' => 'HomeController@about']);
});

$router->group([], function () use ($router) {
    $router->get('/city/', ['as' => 'city', 'uses' => 'CityController@index']);
});

$router->group([], function () use ($router) {
    $router->get('/country/', ['as' => 'country', 'uses' => 'CountryController@index']);
});
