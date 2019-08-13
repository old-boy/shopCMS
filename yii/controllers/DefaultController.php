<?php

namespace app\controllers;

use Yii;
use app\common\components\BaseWebController;

class DefaultController extends BaseWebController{

    //指定公共代码块 main
    public function __construct($id, $module, $config = []){
        parent::__construct($id, $module, $config = []);
        $this->layout = "main";
    }
    
    public function actionIndex(){
        return $this -> render("index");
    }
}