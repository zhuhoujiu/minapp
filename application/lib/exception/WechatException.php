<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 2018/6/18
 * Time: 20:32
 */

namespace app\lib\exception;


class WechatException extends BaseException
{
    public $code = 404;
    public $msg = '微信内部错误';
    public $errorCode = 60000;
}