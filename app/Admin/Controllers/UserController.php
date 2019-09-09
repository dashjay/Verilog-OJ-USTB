<?php

namespace App\Admin\Controllers;

use App\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Rap2hpoutre\FastExcel\FastExcel;


class UserController extends AdminController
{
  /**
   * Title for current resource.
   *
   * @var string
   */
  protected $title = '学生管理';

  /**
   * Make a grid builder.
   *
   * @return Grid
   */
  protected function grid()
  {
    $grid = new Grid(new User);

    $grid->header(function () {
      return view('admin.tools.batchadd');
    });

    $grid->column('id', __('Id'));
    $grid->column('username', __('Username'));
    $grid->column('intro', __('Intro'));
    $grid->column('avatar', __('Avatar'));
    $grid->column('email', __('Email'));
//        $grid->column('password', __('Password'));
    $grid->column('remember_token', __('Remember token'));
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
    $show = new Show(User::findOrFail($id));

    $show->field('id', __('Id'));
    $show->field('username', __('Username'));
    $show->field('intro', __('Intro'));
    $show->field('avatar', __('Avatar'));
    $show->field('email', __('Email'));
    $show->field('password', __('Password'));
    $show->field('remember_token', __('Remember token'));
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
    $form = new Form(new User);

    $form->text('username', __('Username'));
    $form->text('intro', __('Intro'));
    $form->image('avatar', __('Avatar'));
    $form->email('email', __('Email'));
    $form->password('password', __('Password'));
    $form->text('remember_token', __('Remember token'));

    return $form;
  }

  public function batchadd()
  {
    $file = rqf('batch');
    if (!$file) {
      return make_re()->error('上传了个屁');
    }
    $count = 0;
    $collection = (new FastExcel)->import($file);

    foreach ($collection as $u) {
      $user = new User();
      $user->user_batch_add($u['username'], $u['name'], $u['password'], $u['class']);
      $count++;
    }
    return make_re()->info('新增了' . $count . '个学生');
  }


  public function get_template()
  {
    $list = collect([
      ['username' => '41724235', 'password' => '41724235'],
      ['username' => '41824235', 'password' => '41824235'],
    ]);
    return (new FastExcel($list))->download('template.xlsx');

  }
}
