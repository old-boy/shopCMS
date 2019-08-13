<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class WebAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public function registerAssetFiles($view){
        // 初始化静态资源,版本号是个常量，加载静态资源是有条件时使用这种方法

        $release_version = defined("RELEASE_VERSION")?RELEASE_VERSION:time();

        $this->css = [
            'css/web/bootstrap.min.css',
            'font-awesome/css/font-awesome.css',
            'css/web/style.css?ver='.$release_version
        ];
        $this->js = [
            'plugins/jquery-3.4.1.js',
            'plugins/datetimepicker/jquery.datetimepicker.full.min.js',
            'plugins/bootstrap-3.3.7-dist/js/bootstrap.min.js'
        ];
        $this->depends = [
            'yii\web\YiiAsset',
            'yii\bootstrap\BootstrapAsset',
        ];
        parent::registerAssetFiles($view);
    }
}
