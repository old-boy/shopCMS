<?php
namespace app\modules\web\controllers;
use yii\base\Controller;

class BrandController extends Controller{

    //指定公共代码块 main
    public function __construct($id, $module, $config = []){
		parent::__construct($id, $module, $config = []);
        $this->layout = "main";
    }

    // 品牌详情
    public function actionInfo(){
		return $this->render("info");
	}

    // 编辑品牌信息
    public function actionSet(){
        return $this->render("set");
    }

    //品牌相册
    public function actionImages(){
        return $this->render("images");
    }


}