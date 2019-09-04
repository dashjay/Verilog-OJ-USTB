<?php

namespace App\Http\Controllers;

use App\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnnouncementController extends Controller
{
    public function get(Announcement $announcement)
    {
        $temp_page = rq('page');
        $temp_nums = rq('nums');
        $page = $temp_page ? $temp_page : 1;
        $nums = $temp_nums ? $temp_nums : 15;

        $results = $announcement
            ->orderBy('created_at')//按照time排序
            ->skip(($page - 1) * $nums)//跳过
            ->take($nums)// 取每页显示数量个
            ->get(); // get

        foreach ($results as $result) {
            $temp = DB::select('select name from admin_users where id = ' . $result->created_by);
            $result->created_by = $temp[0]->name;
        }
        return make_re()->info_with_object('announcement returned', $results);
    }
}
