<?php

namespace App\Http\Controllers;

use App\Problem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProblemController extends Controller
{


    /**
     * @return array
     */
    public function getProblemTagList()
    {
        $alltags = [];
        $tags = DB::table('tags')->get(['name']);

        foreach ($tags as $tag) {
            array_push($alltags, array('name' => $tag->name));
        }
        return make_re()->info_with_object('tags returned', $alltags);

//        $allproblems = $problem->get(['tags']);
//
//        foreach ($allproblems as $problem) {
//            foreach ($problem->tags as $tag) {
//                if($alltags);
//            }
//        }
    }

    public function getProblemList(Problem $problem)
    {
        $problem_id = rq('problem_id');
        if ($problem_id) {
            return make_re()->info_with_object(
                'problem returned',
                $problem
                    ->where('id', $problem_id)
                    ->get(['id', 'title', 'content', 'difficulty', 'tags', 'wavedrom', 'template'])
                    ->first());

        }

        $offset = rq('offset');
        $limit = rq('limit');
        $query = rq('query');
        if (!$query) {
            return make_re()->error('query is required');
        }
        $conditions = json_decode($query);

        $p = $problem
            ->where('title', 'like', '%' . $conditions->keyword . '%')
            ->where('tags', 'like', '%' . $conditions->tag . "%")
            ->where('difficulty', 'like', '%' . $conditions->difficulty . '%')
            ->skip($offset ? $offset : 0)
            ->take($limit ? $limit : 20)
            ->get();

        $count = count($problem->get());


        return make_re()->info_with_object('problem returned',
            array('problems' => $p, 'count' => $count));
    }

}
