<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 2018/6/17
 * Time: 18:46
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    public $code = 404;
    public $msg = '请求的Banner不存在';
    public $errorCode = 40000;
}