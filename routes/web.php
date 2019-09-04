<?php

use App\ResponseMaker;


/**
 * @param $request string 请求字段名称
 * @return mixed 请求到的字段
 */
function rq($request)
{
    return Request::get($request);
}

/**
 * @param $request string 请求文件的名称
 * @return array|null 返回的文件
 */
function rqf($request)
{
    return Request::file($request);
}

function make_re()
{
    return new ResponseMaker();
}

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/graph', function () {
    $wavedrom = rq('wavedrom');
    return view('admin.graph', ['wavedrom' => $wavedrom]);
});

Route::prefix('/api')->group(function () {
    Route::prefix('/user')->group(function () {
        Route::any('/register', 'UserController@user_register');
        Route::any('/login', 'UserController@user_login');
        Route::get('/logout', 'UserController@user_logout');
        Route::any('/check', 'UserController@check_username_or_email');
        Route::any('/get', 'UserController@get_user_info');
    });

    Route::prefix('/announcement')->group(function () {
        Route::any('/get', 'AnnouncementController@get');
    });
});
