<?php

namespace App\Admin\Controllers;

use App\Problem;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Show;
use Illuminate\Support\Facades\DB;

class ProblemController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Problem';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Problem);


        $grid->column('title', __('Title'));
        $grid->column('content', __('Content'));
        $grid->column('id', __('Id'));
        $grid->column('answer', __('Answer'));
        $grid->column('stimulation', __('Stimulation'));
        $grid->column('difficulty', __('Difficulty'));
        $grid->column('total_solved', __('Total solved'));
        $grid->column('total_submit', __('Total submit'));
        $grid->column('tags', __('Tags'));
        $grid->column('wavedrom', __('Wavedrom'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Problem::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('content', __('Content'));
        $show->field('answer', __('Answer'));
        $show->field('stimulation', __('Stimulation'));
        $show->field('difficulty', __('Difficulty'));
        $show->field('total_solved', __('Total solved'));
        $show->field('total_submit', __('Total submit'));
        $show->field('tags', __('Tags'));
        $show->field('wavedrom', __('Wavedrom'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Problem);

        $form->tab('基本信息', function ($form) {
            $form->text('title', __('Title'));
            $form->textarea('content', __('Content'));
        })->tab('详细信息', function ($form) {
            $form->divider();
            $form->typescript('answer', __('标准答案'))->height(300);
            $form->divider();
            $form->typescript('stimulation', __('Stimulation'))->height(300);
            $form->divider();
        })->tab('题目设置', function ($form) {
            $form->number('difficulty', __('Difficulty'));
            $form->text('tags', __('Tags'));
        });

//        $form->number('total_solved', __('Total solved'));
//        $form->number('total_submit', __('Total submit'));
//        $form->text('wavedrom', __('Wavedrom'));

        return $form;
    }

    public function make(Content $content, Problem $problem)
    {
        $id = rq('id');
        $title = '示例题目';
//        $title = $problem->where('id', $id)->first()->title;
        return $content
            ->title('题目补全')
            ->description('对题目' . $title . '的补全')
            ->row('<center><h1>针对题目</h1></center>')
            ->row(function (Row $row) {

                $row->column(16, function (Column $column) {
                    $column->append(view('admin.answer'));
                });

            });
    }
}
