<?php
namespace  app\common\services;

use yii\helpers\Url;

// web 端的链接
// static 表示不用初始化都可以使用
class UrlService {

	// 微商城 url
	public static function buildMUrl( $path,$params = [] ){
		$domain_config = \Yii::$app->params['domain'];
		$path = Url::toRoute(array_merge([ $path ],$params));
		return $domain_config['m'] .$path;
	}

	// 商城后台
	public static function buildWebUrl( $path,$params = [] ){
		$domain_config = \Yii::$app->params['domain'];
		$path = Url::toRoute(array_merge([ $path ],$params));
		return $domain_config['web'] .$path;
	}

	// 官网
	public static function buildWwwUrl( $path,$params = [] ){
		$domain_config = \Yii::$app->params['domain'];
		$path = Url::toRoute(array_merge([ $path ],$params));
		return $domain_config['www'].$path;
	}

	// 空url，不跳转
	public static function buildNullUrl(){
		return "javascript:void(0);";
	}

	// 图片url
	public static function buildPicUrl( $bucket,$file_key ){
		$domain_config = \Yii::$app->params['domain'];
		$upload_config = \Yii::$app->params['upload'];
		return $domain_config['www'].$upload_config[ $bucket ]."/".$file_key;
	}
}