<?php
/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/users', 'UserController2@getUsers'); // Get all users
    $router->post('/users', 'UserController2@add'); // Create user
    $router->get('/users/{id}', 'UserController2@show'); // Get user by ID
    $router->put('/users/{id}', 'UserController2@update'); // Update user
    $router->delete('/users/{id}', 'UserController2@delete'); // Delete user
});
