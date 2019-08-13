<?php
namespace app\modules\web\controllers;
use yii\base\Controller;

class FinanceController extends Controller{

    //指定公共代码块 main
    public function __construct($id, $module, $config = []){
		parent::__construct($id, $module, $config = []);
        $this->layout = "main";
    }

    // 订单列表
    public function actionOrder(){
		return $this->render("order");
	}

    // 订单流水
    public function actionAccount(){
        return $this->render("account");
    }

    // 订单详情
    public function actionOrderInfo(){
        return $this->render("order_info");
    }
}