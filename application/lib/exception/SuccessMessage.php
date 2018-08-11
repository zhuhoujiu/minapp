<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 2018/6/19
 * Time: 9:13
 */

namespace app\lib\exception;


class SuccessMessage extends BaseException
{
    public $code = 201;
    public $msg = 'ok';
    public $errorCode = 0;
}