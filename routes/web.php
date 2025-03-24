<?php
/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/users', 'User2Controller@getUsers'); // Get all users
    $router->post('/users', 'User2Controller@add'); // Create user
    $router->get('/users/{id}', 'User2Controller@show'); // Get user by ID
    $router->put('/users/{id}', 'User2Controller@update'); // Update user
    $router->delete('/users/{id}', 'User2Controller@delete'); // Delete user
    $router->get('/usersjob', 'UserJobController@index'); // Get all jobs
    $router->get('/userjob/{id}', 'UserJobController@show');
});
