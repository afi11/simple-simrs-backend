<?php

/** @var \Laravel\Lumen\Routing\Router $router */


$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['middleware' => 'auth','prefix' => 'api'], function ($router) 
{
    $router->get('me', 'AuthController@me');
    // department
    $router->get('department', 'DepartmentController@index');
    $router->post('department', 'DepartmentController@store');

    // pasien
    $router->get('pasien', 'PasienController@index');
    $router->post('pasien', 'PasienController@store');
    $router->post('up_pasien/{id}', 'PasienController@update');

    // pendaftaran
    $router->post('pendaftaran', 'PendaftaranController@store');
});

$router->group(['prefix' => 'api'], function () use ($router) 
{
   $router->post('register', 'AuthController@register');
   $router->post('login', 'AuthController@login');
});