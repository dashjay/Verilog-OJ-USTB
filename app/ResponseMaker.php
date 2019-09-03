<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResponseMaker extends Model
{
    public function info($msg)
    {
        return ['status' => 1, 'msg' => $msg];
    }

    public function error($error)
    {
        return ['status' => 0, 'msg' => $error];
    }

    public function info_with_object($msg, $obj)
    {
        return ['status' => 1, 'msg' => $msg, 'object' => $obj];
    }

    public function error_with_object($msg, $obj)
    {
        return ['status' => 0, 'msg' => $msg, 'object' => $obj];
    }
}
