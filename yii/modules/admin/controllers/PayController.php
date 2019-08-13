<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

/**
 * Pay
 */
class PayController extends Controller
{
    public function __construct($id, $module, $config = [])
    {
        parent::__construct($id, $module, $config = []);
        $this->layout = "m";
    }

    // buy
    public function actionBuy(){
        return $this->render("buy");
    }
}
