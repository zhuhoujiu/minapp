<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 2018/6/18
 * Time: 19:38
 */

namespace app\api\controller\v1;


use app\api\service\UserToken;
use app\api\validate\TokenGet;

class Token
{

    public function getToken($code=''){
        (new TokenGet())->goCheck();
        $u = new UserToken($code);
        $token = $u->get();
        return [
            'token' =>$token
        ];
    }
}
