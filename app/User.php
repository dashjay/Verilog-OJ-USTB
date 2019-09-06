<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;


class User extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
//        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
//        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
//        'email_verified_at' => 'datetime',
    ];

    /**
     * 向数据库中添加信息
     * @param $username string 用户名
     * @param $password string 密码
     * @return array 注册的相关信息
     */
    public function user_add($username, $password)
    {
        //使用自带的哈希工具对密码进行hash
        $hashed_password = Hash::make($password);

        //用户名密码
        $this->username = $username;
        $this->password = $hashed_password;

        //保存
        if ($this->save()) {
            return make_re()->info('user register successfully');
        } else {
            return make_re()->error('user register fail');
        }
    }

    /**
     * 查找
     * @param $username string 传入查找的用户名
     * @return User 查找到的用户
     */
    public function user_find_by_username($username)
    {
        //查找用户
        $users = $this
            ->where('username', $username)
            ->get(['id', 'username', 'avatar', 'email', 'intro'])
            ->first();

        return $users;
    }

    public function check_password($username, $password)
    {
        $user = $this
            ->where('username', $username)
            ->get(['password'])
            ->first();
        return Hash::check($password, $user->password);
    }

    public function user_find_by_email($email)
    {
        //查找用户
        $users = $this
            ->where('email', $email)
            ->first();

        return $users;
    }

    public function find_by_id($id)
    {
        $user = $this
            ->where('id', $id)
            ->first();

        return $user;
    }

    /**
     * 删除
     */
    public function user_delete()
    {
        /**
         * 处理对改用户删除的其他方法
         *
         */
        return $this->delete();
    }

    /**
     * 修改
     */
    public function user_modify()
    {

    }

    public function batch()
    {
        return $this->belongsTo(Batch::class, 'batch_id');
    }
}
