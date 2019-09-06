<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix' => config('admin.route.prefix'),
    'namespace' => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {
    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->get('/get_admin', 'UtilController@get_admin');
    $router->get('/problem_complete', 'ProblemController@make');
    $router->post('/problem/stim', 'ProblemController@stim');
    $router->post('/problem/complete', 'ProblemController@complete');

    $router->resource('users', UserController::class);
    $router->resource('announcements', AnnouncementController::class);
    $router->resource('problems', ProblemController::class);
    $router->resource('tags', TagController::class);
    $router->resource('solutions', SolutionController::class);
});
