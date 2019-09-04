<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix' => config('admin.route.prefix'),
    'namespace' => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {
    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->resource('users', UserController::class);
    $router->resource('announcements', AnnouncementController::class);
    $router->get('/get_admin', 'UtilController@get_admin');
    $router->resource('problems', ProblemController::class);
    $router->get('/problem_completion', 'ProblemController@make');
});
