<?php
namespace app\modules\web\controllers;
use yii\base\Controller;

class BookController extends Controller{

    //指定公共代码块 main
    public function __construct($id, $module, $config = []){
		parent::__construct($id, $module, $config = []);
        $this->layout = "main";
    }

    // 图书列表
    public function actionIndex(){
		return $this->render("index");
	}

    // // 图书编辑
    public function actionSet(){
        return $this->render("set");
    }

    //图书详情
    public function actionInfo(){
        return $this->render("info");
    }

    // //图书相册
    public function actionImages(){
        return $this->render("images");
    }

    // 图书分类
    public function actionCat(){
        return $this->render("cat");
    }
}