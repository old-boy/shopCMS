<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

/**
 * Product
 */
class ProductController extends Controller
{
    public function __construct($id, $module, $config = [])
    {
        parent::__construct($id, $module, $config = []);
        $this->layout = "m";
    }

    /**
     * 商品列表
     */
    public function actionIndex(){
        return $this->render("index");
    }

    // 商品详情
    public function actionInfo(){
        return $this->render("info");
    }

    // 商品订单
    public function actionOrder(){
        return $this->render("order");
    }
  
}
