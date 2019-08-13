<?php
namespace app\common\components;

use yii\web\Controller;
use Yii;


class BaseWebController extends Controller
{
	//YII 默认会开启CSRF 攻击时保护，不适合在开发微信公众号的 post 使用，因此需要关闭
	public $enableCsrfValidation = false;
	//定义登录用户信息
	protected $current_user = '';

	public function post($key, $default = "") {
		return Yii::$app->request->post($key, $default);
	}


	public function get($key, $default = "") {
		return Yii::$app->request->get($key, $default);
	}


	protected function setCookie($name,$value,$expire = 0){
		$cookies = Yii::$app->response->cookies;
		$cookies->add( new \yii\web\Cookie([
			'name' => $name,
			'value' => $value,
			'expire' => $expire
		]));
	}

	public function getCookie($name,$default_val=''){
		$cookies = Yii::$app->request->cookies;
		return $cookies->getValue($name, $default_val);
	}


	protected function removeCookie($name){
		$cookies = Yii::$app->response->cookies;
		$cookies->remove($name);
	}

	protected function renderJSON($data=[], $msg ="ok", $code = 200)
	{
		header('Content-type: application/json');
		echo json_encode([
			"code" => $code,
			"msg"   =>  $msg,
			"data"  =>  $data,
			"req_id" =>  uniqid()
		]);

		return \Yii::$app->end();
	}

	//统一js提醒
	protected  function renderJS($msg,$url = "/")
	{
		return $this->renderPartial("@app/views/common/js", ['msg' => $msg, 'url' => $url]);
	}

	public function getUid(){
		return $this->current_user ? $this->current_user['uid'] : 0;
	}
}


