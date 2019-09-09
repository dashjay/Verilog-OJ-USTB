<?php

namespace App\Admin\Controllers;

use App\Tag;
use Encore\Admin\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

  public function get_tags(Tag $tag)
  {
    $res = [];
    $temps = $tag->get(['name']);
    foreach ($temps as $temp) {
      array_push($res, $temp->name);
    }
    return $res;
  }


  public function upload(Request $request)
  {
    if ($request->hasFile('upload_file')) {
      $picture = $request->file('upload_file');
      if (!$picture->isValid()) {
        abort(400, '无效的上传文件');
      }
      // 文件扩展名
      $extension = $picture->getClientOriginalExtension();
      // 文件名
      $fileName = $picture->getClientOriginalName();
      // 生成新的统一格式的文件名
      $newFileName = md5($fileName . time() . mt_rand(1, 10000)) . '.' . $extension;
      // 图片保存路径
      $savePath = 'images/' . $newFileName;
      // Web 访问路径
      $webPath = '/storage/' . $savePath;

      // 将文件保存到本地 storage/app/public/images 目录下，先判断同名文件是否已经存在，如果存在直接返回
      if (Storage::disk('public')->has($savePath)) {
        return response()->json(['path' => $webPath]);
      }
      // 否则执行保存操作，保存成功将访问路径返回给调用方
      if ($picture->storePubliclyAs('images', $newFileName, ['disk' => 'public'])) {
        return ['success' => true, 'msg' => 'upload successfully', 'file_path' => $webPath];
      }
      abort(500, '文件上传失败');
    } else {
      abort(400, '请选择要上传的文件');
    }
  }

}
