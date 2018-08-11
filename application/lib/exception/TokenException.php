<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 2018/6/18
 * Time: 21:46
 */

namespace app\lib\exception;


class TokenException extends BaseException
{
    public $code = 404;
    public $msg = 'Token已过期或无效Token';
    public $errorCode = 30000;
}