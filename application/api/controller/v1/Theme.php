<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 2018/6/18
 * Time: 14:43
 */

namespace app\api\controller\v1;


use app\api\validate\IDCollection;
use app\api\model\Theme as ThemeModel;
use app\api\validate\IDMustBePostivelnt;
use app\lib\exception\ThemeException;

class Theme
{
 public function getSimpleList($ids=''){
     (new IDCollection())->goCheck();
     $ids = explode(',',$ids);
     $result = ThemeModel::with('topicImg,headImg')->select($ids);
     if($result->isEmpty()){
         throw new ThemeException();
     }
     return $result;
 }

    /**
     * @url Theme/:id
     * @param $id
     * @return string
     */
    public function getComplexOne($id){
        (new IDMustBePostivelnt())->goCheck();
        $theme = ThemeModel::getThemeWithProducts($id);
        if(!$theme){
            throw new ThemeException();
        }
        return $theme;
 }
}

















