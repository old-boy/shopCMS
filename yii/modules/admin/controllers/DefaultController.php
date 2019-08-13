<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    public function __construct($id, $module, $config = [])
    {
        parent::__construct($id, $module, $config = []);
        $this->layout = "m";
    }
    
    /**
     * 品牌首页
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
