<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Illuminate\Support\Facades\DB;


class UtilController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '实用工具';

    public function get_admin()
    {
        //创建返回结果
        $res = [];

        $temps = DB::table('admin_users')->get(['id', 'name']);

        //遍历每个商品信息
        foreach ($temps as $temp) {
            //将客户信息中name字段改成text的商品名称
            array_push($res, array('id' => $temp->id, 'text' => $temp->name));
        }

        // 返回结果
        return $res;
    }

}
