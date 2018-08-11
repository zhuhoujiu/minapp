<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 2018/6/18
 * Time: 16:05
 */

namespace app\lib\exception;


class ThemeException extends BaseException
{
    public $code = 404;
    public $msg = '指定主题不存在';
    public $errorCode = 30000;
}