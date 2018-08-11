<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 2018/6/17
 * Time: 18:42
 */

namespace app\lib\exception;


use think\Exception;

class BaseException extends Exception
{
    public $code = 400;

    public $msg = '参数错误';

    public $errorCode = 10000;
}