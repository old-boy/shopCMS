<?php
namespace app\modules\web\controllers;

use app\models\User;
use app\common\services\UrlService;
use app\common\services\ConstantMapService;
use app\modules\web\controllers\common\BaseController;
use Yii;


class UserController extends BaseController{

	//指定公共代码块 main
    public function __construct($id, $module, $config = []){
		parent::__construct($id, $module, $config = []);
        $this->layout = "main";
    }

	public function actionLogin(){
		// get 请求时，页面展示
		if( Yii::$app->request->isGet ){
			$this->layout = "login_index";
			return $this->render("login");
		}

		// 打印post参数
		// var_dump($this->post( null ));

		//post 请求时，页面逻辑处理
		
		$login_name = trim( $this->post("login_name","" ));
		$login_pwd = trim( $this->post("login_pwd",""));

		$user_info = User::find()->where([ 'login_name' => $login_name ])->one();
	


		// 1. 获取从前端传回来的数据并判断
		if(!$login_name || !$login_pwd){
			return $this->renderJS("请输入正确的登录用户名~1",UrlService::buildWebUrl("/user/login"));
		}

		// 2.查询数据库用户名是否存在，查询一次 one()，并判断
		if(!$user_info){
			return $this->renderJS("请输入正确的登录用户名~2",UrlService::buildWebUrl("/user/login"));
		}

		//3.数据库中验证密码
		//  数据库中的密码 = md5(login_pwd + md5(login_salt)) login_pwd 为输入的密码，login_salt 为数据库中存在的密码
		//  从前端返回的密码与数据库中的密码进行比对，再判断
		$cur_pwd = md5( $login_pwd . md5($user_info["login_salt"]) );
		if($cur_pwd != $user_info["login_pwd"]){
			return $this->renderJS("请输入正确的登录用户名~3",UrlService::buildWebUrl("/user/login"));
		}

		//4.保存用户的登录状态
		// cookie格式 = 加密字符串 + # + uid
		// 加密字符串 = md5(login_name + login_pwd + login_salt)
		$cur_cookie = md5($user_info['login_name'].$user_info['login_pwd'].$user_info['login_salt'])."#".$user_info['uid'];
		$this->setCookie('mooc_book',$cur_cookie);

		//5.登录成功后，跳转到帐户管理页面
		return $this->redirect(UrlService::buildWwwUrl("/web/account/index"));
	}

	public function actionEdit(){
		if( Yii::$app->request->isGet){
			$user = $this->current_user;
			return $this->render("edit",[
				'info' => $user
			]);
		}

		//获取前端返回的字段
		$nickname = trim($this->post('nickname',''));
		$email = trim( $this->post('email','') );

		//mb_strlen() 对用户写入的数据进行检测
		if( mb_strlen( $nickname,"utf-8" ) < 1 ){
			return $this->renderJSON( [],"请输入符合规范的姓名~~",-1 );
		}

		if( mb_strlen( $email,"utf-8" ) < 1 ){
			return $this->renderJSON( [],"请输入符合规范的邮箱地址~~",-1 );
		}

		//将更改后的信息 current_user 赋值给 $user_info， 而 $user_info 正好是查询数据库后的数据变量
		$user_info = $this->current_user;

		//nickname（字段）=> 赋值
		$user_info->nickname = $nickname;
		$user_info->email = $email;
		$user_info->updated_time = date("Y-m-d H:i:s");
		$user_info->update(0);

		return $this->renderJSON([],"操作成功~~");

	}

	//修改密码
	public function actionResetPwd(){

		if( Yii::$app->request->isGet){
			return $this->render("reset_pwd",[
				'info' => $this->current_user
			]);
		}

		$old_password = trim($this->post('old_password',''));
		$new_password = trim($this->post('new_password',''));

		if(!$old_password){
			return $this->renderJSON([],"请输入原密码！",-1);
		}

		if( mb_strlen($new_password,"utf-8") < 6 ){
			return $this->renderJSON([],"请输入不少于6位的新密码！",-1);
		}

		if($old_password == $new_password){
			return $this->renderJSON([],"请重新输入一个吧，新密码和原密码不能相同哦！",-1);
		}

		//数据库中user信息赋值
		$current_user = $this->current_user;
		// 查看当前的密码
		// $cur_pwd = md5( $old_password.md5($current_user["login_salt"]) );
		// 判断密码是否正确
		// if($cur_pwd != $current_user["login_pwd"]){
			// 如果不一样，提示检查原密码
			return $this->renderJSON([],"请检查原密码是否正确！",-1);
		// }

		//更新数据库中的密码，并将新密码重新 md5
		$current_user->login_pwd = md5($new_password.md5($current_user["login_salt"]));
		$current_user->update_time = date('Y-m-d H:i:s');

		//提示用户更新成功
		$current_user->update(0);

		//对重新设置的密码重新计算 md5 值，因为当前 cookie 是原密码生成的，新密码更新成功后如果不计算会导致cookie不一致，最终结果就是更新密码后直接退出
		//方法就是将当前用户传给 setLoginStatus ，重新生成cookie. setLoginStatus 为 BaseController中的方法
		// $this->setLoginStatus($user_info);
		return $this->renderJSON([],"重置密码成功！",-1);
	}

	public function actionLogout(){
		$this->removeAuthToken();
		return $this->redirect( UrlService::buildWebUrl("/user/login") );
	}
}