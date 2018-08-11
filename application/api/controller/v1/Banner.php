<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 2018/6/17
 * Time: 15:37
 */

namespace app\api\controller\v1;
use app\api\model\Banner as BannerModel;
use app\api\validate\IDMustBePostivelnt;
use app\lib\exception\BannerMissException;

class Banner
{
    /**
     * @param $id banner的id号
     */
    public function getBanner($id){
        (new IDMustBePostivelnt())->goCheck();
        $banner = BannerModel::getBannerByID($id);
        if (!$banner){
            throw new BannerMissException();
        }
        return $banner;
    }
}