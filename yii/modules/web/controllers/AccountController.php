<?php
namespace app\modules\web\controllers;
use app\modules\web\controllers\common\BaseController;
use app\common\services\ConstantMapService;
use Yii;

use app\models\User;

class AccountController extends BaseController{

    //指定公共代码块 main
    public function __construct($id, $module, $config = []){
		parent::__construct($id, $module, $config = []);
        $this->layout = "main";
    }

    //帐户首页
    public function actionIndex(){
        //查询用户表的数据并展示
        //以 uid 倒序的方式进行排序
        $userList = User::find()->orderBy(['uid' => 'SORT_DESC'])->all();

        return $this->render("index",[
            'userList' => $userList,
            'status_mapping' => ConstantMapService::$status_mapping
        ]);
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