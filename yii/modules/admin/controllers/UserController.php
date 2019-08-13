<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

/**
 * User
 */
class UserController extends Controller
{
    public function __construct($id, $module, $config = [])
    {
        parent::__construct($id, $module, $config = []);
        $this->layout = "m";
    }

    // 绑定用户
    public function actionBind(){
        return $this->render("bind");
    }

    // 购物车
    public function actionCart(){
        return $this->render("cart");
    }

    /**
     * 我的相关
     */

    //  我的信息
    public function actionIndex(){
        return $this->render("index");
    }

    // 我的地址
    public function actionAddress(){
        return $this->render("address");
    }

    // 添加地址
    public function actionAddress_add(){
        return $this->render("address_add");
    }

    // 我的收藏
    public function actionFav(){
        return $this->render("fav");
    }

    // 用户评论
    public function actionComment(){
        return $this->render("comment");
    }

    // 添加评论
    public function actionComment_add(){
        return $this->render("comment_add");
    }

}
