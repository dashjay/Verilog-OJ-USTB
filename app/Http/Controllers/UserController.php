<?php

namespace App\Http\Controllers;

use App\Security;
use App\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * 注册方法
     * @param User $user 传入用户类
     * @param Security $security 用户检测用户操作是否正常
     * @return array laravel会格式化为json
     */
    public function user_register(User $user, Security $security)
    {
        if ($security->timecheck()) {
            return make_re()->error('Your requests are so frequently');
        }
        $username = rq('username');
        if (!$username) {
            return make_re()->error('username required');
        }

        $password = rq('password');
        if (!$password) {
            return make_re()->error('password required');
        }

        $user_exists = $user->user_find_by_username($username);

        if ($user_exists) {
            return make_re()->error('username exists');
        }

        return $user->user_add($username, $password);

    }

    /**
     * 用户登录的方法
     * @param User $user 引入用户方便ORM操作
     * @param Security $security 用于检测用户操作是否安全的模块
     * @return array 返回数组自动转化为json对象
     */
    public function user_login(User $user, Security $security)
    {
        if ($security->timecheck()) {
            return make_re()->error('Your requests are so frequently');
        }

        $username = rq('username');
        if (!$username) {
            return make_re()->error('username required');
        }

        $password = rq('password');
        if (!$password) {
            return make_re()->error('password required');
        }

        // 用户存在检测
        $user_exists = $user->user_find_by_username($username);
        if (!$user_exists) {
            return make_re()->error('user not exists');
        }

        //密码错误
        if (!$user->check_password($username, $password)) {
            return make_re()->error('username or password not correct');
        }

        //正确密码
        session()->put('username', $username);

        if (!session('username')) {
            return make_re()->error('WARNING please let your teacher know this');
        }
//        return dd(session()->all());
        return make_re()->info($username . ' has login successfully');
    }

    /**
     * 注销的方法
     * @param Security $security 检测用户操作是否安全的方法
     * @return array
     */
    public function user_logout(Security $security)
    {
        if ($security->timecheck()) {
            return make_re()->error('Your requests are so frequently');
        }

        if (!session('username')) {
            return make_re()->error('You did not login');
        }

        session()->flush();
        return make_re()->info('log out successfully');
    }

    /**
     * 修改用户用户相关信息的方法
     * @return string
     */
    public function user_modify()
    {
        return 'modify';
    }

    public function check_username_or_email(User $user)
    {

        $username = rq('username');
        if ($username) {
            if ($user->user_find_by_username($username)) {
                return ['username' => true];
            } else {
                return ['username' => false];
            }
        }
        $email = rq('email');
        if ($email) {
            if ($user->user_find_by_email($email)) {
                return ['email' => true];
            } else {
                return ['email' => false];
            }
        }

        return make_re()->error('username or email is required if you want to check');
    }

    /**
     * @param User $user
     * @return array
     */
    public function get_user_info(User $user)
    {
        $username = session('username');
        if (!$username) {
            return make_re()->error('you are not login');
        } else {
            // 已经在session里了就默认不可能为空了
            return make_re()->info_with_object(
                'user info returned',
                $user->user_find_by_username($username)
            );

        }

    }
}
