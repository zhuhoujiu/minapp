<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 2018/6/19
 * Time: 9:04
 */

namespace app\lib\exception;


class UserException extends BaseException
{
    public $code = 404;
    public $msg = '用户不存在';
    public $errorCode = 60000;
}