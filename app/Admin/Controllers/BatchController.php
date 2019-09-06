<?php

namespace App\Admin\Controllers;

use App\Batch;
use App\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use function foo\func;

use Encore\Admin\Widgets\Table;

class BatchController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Batch';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Batch);



        $grid->quickCreate(function (Grid\Tools\QuickCreate $create) {
            $create->text('batch_name', '标签名');
        });

        $grid->column('id', __('Id'))->modal(function ($model) {
//            $group_member = $model->users()->take(10)->map(function ($users) {
//                return $users->only(['id', 'username',]);
//            });
            $user = new User();
            $group_member = $user->where('batch_id', $model->id)->get(['id', 'username']);

            return new Table(['id', '用户名'], $group_member->toArray());
        });
        $grid->column('batch_name', __('Batch name'));
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
        $show = new Show(Batch::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('batch_name', __('Batch name'));
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
        $form = new Form(new Batch);

        $form->text('batch_name', __('Batch name'));

        return $form;
    }
}
