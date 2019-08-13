<?php
namespace app\modules\web\controllers;
use yii\base\Controller;

class AccountController extends Controller{

    //指定公共代码块 main
    public function __construct($id, $module, $config = []){
		parent::__construct($id, $module, $config = []);
        $this->layout = "main";
    }

    //帐户首页
    public function actionIndex(){
        return $this->render("index");
    }

    // 帐户的添加或编辑
    public function actionSet(){
        return $this->render("set");
    }

    //帐户详情
    public function actionInfo(){
        return $this->render("info");
    }


}