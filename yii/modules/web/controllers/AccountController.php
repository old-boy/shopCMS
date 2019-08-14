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
       
        /**
         * 以 uid 倒序的方式进行排序
         * 
         * 获取从前端传回的值
         * mix_kw / $status 混合搜索,使用 LIKE 匹配关键字，OR =》 查询条件
         * 重置查询方法  $search_ops
         * 
         * 查询用户表的数据并展示
         */
        

        $status = intval($this->get("status",ConstantMapService::$status_default));
        $mix_kw = trim($this->get("mix_kw","")); 

        $search_ops = User::find();

        /**
         * mohu search
         */
        if($status > ConstantMapService::$status_default){
            //search
            $search_ops->andWhere(['status' => $status]);
        }

        if($mix_kw){
            //or search => nickname or mobile
            $where_nickname = [ 'LIKE','nickname','%'.$mix_kw.'%', false ];
            $where_mobile = [ 'LIKE','mobile','%'.$mix_kw.'%', false ];

            //search
            $search_ops->andWhere([ 'OR',$where_nickname,$where_mobile ]);
        }

        $userList = $search_ops->orderBy(['uid' => 'SORT_DESC'])->all();

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