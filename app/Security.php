<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Security extends Model
{
    /**
     * 检测用户使用某些API是否过于频繁
     * @return bool true代表频繁，false代表不正常
     */
    public function timecheck()
    {
        // 第一次把时间放入缓存
        if (!session('time_')) {
            session()->put('time_', time());
            return false;
        }

        // 记录当前时间
        $new_time = time();

        //计算时间间隙
        $timegap = $new_time - session('time_');

        //时间重置
        session()->remove('time_');
        session()->put('time_', $new_time);
        session()->save();

        //返回是否正常
        return ($timegap < env('MAX_SECURITY_TIME', 1));
    }
}
