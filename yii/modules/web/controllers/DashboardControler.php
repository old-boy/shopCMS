<?php
namespace app\modules\web\controllers;
use yii\base\Controller;

class DashboardControler extends Controller{

    //指定公共代码块 main
    public function __construct($id, $module, $config = []){
		parent::__construct($id, $module, $config = []);
        $this->layout = "main";
    }

    //首页
    public function actionIndex(){
        return $this->render("index");
    }
}