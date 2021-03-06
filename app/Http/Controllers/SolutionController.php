<?php

namespace App\Http\Controllers;


use App\Problem;
use App\Solution;
use App\User;
use Illuminate\Support\Facades\DB;

class SolutionController extends Controller
{
    /**
     * @param Problem $problem
     * @param Solution $solution
     * @return array 做题情况
     */
    public function add(Problem $problem, Solution $solution)
    {
        //从session中获取用户名
        $username = session('username');
        if (!$username) {
            return make_re()->error('you did not login');
        }

        $user = new User();
        $u = $user->user_find_by_username($username);
        if (!$u) {
            return make_re()->error('you username ' . $username . 'not belongs to any user');
        }
        $id = rq('id');
        if (!$id) {
            return make_re()->error('the id of question is required');
        }
        $code = rq('code');
        if (!$code) {
            return make_re()->error('you code is empty');
        }

        $p = $problem->where('id', $id)->first();
        if (!$p) {
            return make_re()->error('problem not exists');
        }

        $stim = $p->stimulation;

        $params = array(
            'top_module' => $code,
            'stim' => $stim
        );

        $result = post('http://127.0.0.1:33778/solve', $params);

        $res = json_decode($result);

        $solution->user_id = $u->id;
        $solution->question_id = $id;
        $solution->code = $code;
        $solution->wavedrom = $res->signal;
        $solution->svg = $res->svg;
        $solution->is_pass = 0;

        $solution->save();

        $is_pass = DB::select(' select (select wavedrom from solutions where id = ' . $solution->id . ') <=> (select wavedrom from problems where id = ' . $id . ') as is_pass ');
        if (!$is_pass) {
            return make_re()->error_with_object('can not know you if you were passed', $res);
        }

//        dd($res->signal, $p->wavedrom);
        if ($is_pass[0]->is_pass) {
            $solution->is_pass = 1;
        } else {
            $solution->is_pass = 0;
        }

        $solution->save();

        if ($solution->is_pass) {
            return ['msg' => '你做对了', 'object' => $res, 'success' => 1];
        } else {
            return ['msg' => '你做错了', 'object' => $res, 'success' => 0];
        }

    }

    public function get(Solution $solution)
    {
        $username = session('username');
        $user = (new User())->user_find_by_username($username);
        if (!$user) {
            return make_re()->error('user not found, please relogin');
        }
        $id = rq('id');
        if (!$id) {
            return make_re()->error('id is required');
        }
        $s = $solution->where('user_id', $user->id)->where('question_id', $id)->get();
        if ($s) {
            return make_re()->info_with_object('solutions returned', $s);
        } else {
            return make_re()->error('no solutions');
        }

    }

    public function get_info(Solution $solution)
    {
        $id = rq('id');
        if (!$id) {
            return make_re()->error('id (question) is required');
        }

        $total = $solution->where('question_id', $id)->count();
        $pass = $solution->where('question_id', $id)->where('is_pass', 1)->count();

        return make_re()->info_with_object('question info returned',
            array(
                'total' => $total,
                'pass' => $pass
            ));
    }
}
