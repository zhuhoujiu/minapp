<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 2018/6/18
 * Time: 17:57
 */

namespace app\lib\exception;


class CategoryException extends BaseException
{
    public $code = 404;
    public $msg = '指定类目不存在，请检查参数';
    public $errorCode = 50000;
}