<?php

namespace App\Admin\Controllers;

use App\Solution;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SolutionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Solution';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Solution);

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('code', __('Code'));
        $grid->column('wavedrom', __('Wavedrom'));
        $grid->column('is_pass', __('Is pass'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->disableCreateButton();

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
        $show = new Show(Solution::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('code', __('Code'));
        $show->field('wavedrom', __('Wavedrom'));
        $show->field('is_pass', __('Is pass'));
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
        $form = new Form(new Solution);

        $form->number('user_id', __('User id'));
        $form->textarea('code', __('Code'));
        $form->text('wavedrom', __('Wavedrom'));
        $form->switch('is_pass', __('Is pass'));

        return $form;
    }
}
