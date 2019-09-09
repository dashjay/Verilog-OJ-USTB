<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Problem\Complete;
use App\Problem;
use App\Tag;
use Encore\Admin\Admin;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Show;

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


    $grid->actions(function ($actions) {
      $actions->add(new Complete());
    });
    $grid->column('id', __('#'));
    $grid->column('title', __('Title'));
//        $grid->column('content', __('Content'));
//        $grid->column('answer', __('Answer'));
//        $grid->column('stimulation', __('Stimulation'));
    $grid->column('difficulty')->display(function ($difficulty) {

//            $color = ['#FFB69E', '#FF9F7C', '#FF8E64', '#FF6343', '#FF3628'];
//            return '<div style="background-color: ' . $color[($difficulty / 2) - 1] . '; color: #000000;width:30%;text-align:center" > ' . $difficulty . ' </div>';
//            $color = 'label-danger';
      if ($difficulty <= 3) {
        $color = 'label-success';
      } elseif (3 < $difficulty && $difficulty <= 6) {
        $color = 'label-warning';
      } else {
        $color = 'label-danger';
      }
      return "<span class='label  " . $color . "' >{$difficulty}</span>";
    });
    $grid->column('total_solved', __('Total solved'));
    $grid->column('total_submit', __('Total submit'));
    $grid->column('tags', __('Tags'))->display(function ($tags) {
      $tags = array_map(function ($tag) {
        return "<span class='label label-success'>{$tag}</span>";;
      }, $tags);

      return join('&nbsp;', $tags);
    });
//        $grid->column('wavedrom', __('Wavedrom'));
    $grid->column('created_at', __('Created at'));
    $grid->column('complete', __('完成出题'))->display(function ($complete) {
      if ($complete) {
        return "<span class='label label-success'>完成</span>";
      } else {
        return "<span class='label label-danger'>未完成</span>";
      }

    });


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


    $show->panel()->style('danger')->title('题目详情');
    $show->field('id', __('#'));
    $show->field('title', __('标题'));
    $show->divider();
    $show->field('content', __('Content'));
//        $show->field('answer', __('Answer'));
//        $show->field('stimulation', __('Stimulation'));
    $show->field('difficulty', __('Difficulty'))->badge();
    $show->field('total_solved', __('Total solved'));
    $show->field('total_submit', __('Total submit'));
    $show->field('tags', __('Tags'))->badge();
//        $show->field('svg')->as(function ($svg) {
//
//        });
//        $show->field('wavedrom', __('Wavedrom'))->json();
//        $show->wavedrom();

    $svg = Problem::where('id', $id)->first()->svg;
    if ($svg) {
      Admin::html('<p style="text-align: center;font-size: large">标准答案图像</p><br><center>' . $svg . '</center>');
    }
//        Admin::html('<img src="https://svg.wavedrom.com' . (str_replace('"', "'", $wavedrom)) . '">');
    $show->field('created_at', __('Created at'));


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
      $form->simditor('content', __('Content'));
    })->tab('题目设置', function ($form) {

      $opt = [
        'Low' => 'Low',
        'Mid' => 'Mid',
        'High' => 'High'
      ];
      $util = new UtilController;
      $form->select('difficulty', __('Difficulty'))->options($opt);
      $form->tags('tags', __('Tags'))->options($util->get_tags(new Tag()));
    })->tab('题目模板', function ($form) {
      $form->json('template');
    });
//        $form->number('total_solved', __('Total solved'));
//        $form->number('total_submit', __('Total submit'));
//        $form->text('wavedrom', __('Wavedrom'));

    return $form;
  }

  /**
   * @param Content $content
   * @param Problem $problem
   * @return Content
   * 对应的补全题目页面
   */
  public function make(Content $content, Problem $problem)
  {
    //获取到题目内容
    $p = $problem->where('id', rq('id'))->first();
    if ($p) {
      return make_re()->error('我知道你已经以为自己拿到ROOT正在搞这个网站，放心吧没啥好东西，别日了，缴枪不杀');
    }
    return $content
      ->title($p->title . '的题目补全')
      ->description('题目内容简介:' . substr($p->content, 0, 150))
      ->row(function (Row $row) {
        $row->column(16, function (Column $column) {
          $id = rq('id');
          $column->append(view('admin.answer', ['id' => $id]));
        });
      });
  }

  public function stim()
  {
    $id = rq('id');
    $top_module = rq('top_module');
    $stim = rq('stim');
    if (!$id) {
      return make_re()->error('id is required');
    }
    if (!$top_module) {
      return make_re()->error('top_module is required');
    }
    if (!$stim) {
      return make_re()->error('stim is required');
    }


    $params = array(
      'top_module' => $top_module,
      'stim' => $stim
    );

    return post('http://127.0.0.1:33778/solve', $params);
  }

  /**
   * @param Problem $problem
   * @return array
   * 完成项目项目创建
   */
  public function complete(Problem $problem)
  {
    $id = rq('id');
    if (!$id) {
      return make_re()->error('id is required');
    }
    $p = $problem->where('id', $id)->first();
    if (!$p) {
      return make_re()->error('problem not exists');
    }

    $top_module = rq('top_module');
    $stim = rq('stim');
    $wavedrom = rq('wavedrom');
    $svg = rq('svg');

    if (!$top_module) {
      return make_re()->error('top_module is required');
    }
    if (!$stim) {
      return make_re()->error('stim is required');
    }
    if (!$wavedrom) {
      return make_re()->error('请先点击生成仿真图像');
    }

    $p->answer = $top_module;
    $p->stimulation = $stim;
    $p->wavedrom = $wavedrom;
    $p->complete = true;
    if ($svg) {
      $p->svg = $svg;
    }
    if ($p->save()) {
      return make_re()->info('题目完善成功');
    } else {
      return make_re()->error('题目完善失败');
    }
  }

  //curl不管用了，还是post好用
//    protected function curl(&$err, &$response, $data)
//    {
//
//        $str = "----WebKitFormBoundary7MA4YWxkTrZu0gW\r\n
//        Content-Disposition: form=data; name=";
//        $p = '';
//        foreach (array_keys($data) as $t) {
//            $param = $str . '"' . $t . '"' . "\r\n" . $data[$t] . "\r\n";
//            $p = $p . $param;
//        }
//        //curl初始化
//        $curl = curl_init();
//        curl_setopt_array($curl, array(
//            CURLOPT_PORT => "33778",
//            CURLOPT_URL => "http://127.0.0.1/solve",
//            CURLOPT_RETURNTRANSFER => true,
//            CURLOPT_ENCODING => "",
//            CURLOPT_MAXREDIRS => 10,
//            CURLOPT_TIMEOUT => 30,
//            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//            CURLOPT_CUSTOMREQUEST => "POST",
//            CURLOPT_POSTFIELDS => $p,
//            CURLOPT_HTTPHEADER => array(
//                "Content-Type: multipart/form-data;boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW",
//                "cache-control: no-cache",
//            ),
//        ));
//
//        $response = curl_exec($curl);
//        $err = curl_error($curl);
//        curl_close($curl);
//    }


}
