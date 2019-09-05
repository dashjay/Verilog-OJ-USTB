<?php

namespace App\Admin\Actions\Problem;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;

class Complete extends RowAction
{
    public $name = '补完题目';


    public function href()
    {

        return (env('APP_URL') . '/admin/problem_complete?id=' . $this->getRow()->id);
    }
}
