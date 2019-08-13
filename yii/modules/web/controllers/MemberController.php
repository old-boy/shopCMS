<?php
namespace app\modules\web\controllers;
use yii\base\Controller;

class MemberController extends Controller{

    //指定公共代码块 main
    public function __construct($id, $module, $config = []){
		parent::__construct($id, $module, $config = []);
        $this->layout = "main";
    }

    // 会员列表
    public function actionIndex(){
		return $this->render("index");
	}

    // 会员编辑
    public function actionSet(){
        return $this->render("set");
    }

    // 会员详情
    public function actionInfo(){
        return $this->render("info");
    }

    //会员评论
    public function actionComment(){
        return $this->render("comment");
    }
}