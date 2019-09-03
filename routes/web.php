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

Route::prefix('/api')->group(function () {
    Route::any('/user/register', 'UserController@user_register');
    Route::any('/user/login', 'UserController@user_login');
    Route::get('/user/logout', 'UserController@user_logout');
    Route::any('/user/check', 'UserController@check_username_or_email');
    Route::any('/user/get', 'UserController@get_user_info');
});
