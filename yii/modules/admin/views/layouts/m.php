<?php
use app\common\services\UrlService;

use app\assets\AdminAsset;
AdminAsset::register($this);
?>

<?php $this->beginPage();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- Set render engine for 360 browser -->
	<meta name="renderer" content="webkit">
    <title><?=Yii::$app->params['title'];?></title>
    <?php $this->head();?>
</head>
<body>
    <?php $this->beginBody();?>
    <!-- content -->
    <?=$content;?>
    <!-- user -->
    <div class="copyright clearfix">
        <?php if( isset( $this->params['current_user'] ) ):?>
            <p class="name">欢迎您，<?=UtilService::encode( $this->params['current_user']["nickname"] );?></p>
        <?php endif;?>
        <p class="copyright">由<a href="<?=UrlService::buildWwwUrl('/');?>" target="_blank">编程浪子</a>提供技术支持</p>
    </div>
    <!-- tabbar -->
    <div class="footer_fixed clearfix">
        <span><a href="/admin/" class="default"><i class="home_icon"></i><b>首页</b></a></span>
        <span><a href="/admin/product/index" class="product"><i class="store_icon"></i><b>图书</b></a></span>
        <span><a href="/admin/user/index" class="user"><i class="member_icon"></i><b>我的</b></a></span>
    </div>
    <?php $this->endBody();?>
</body>
</html>
<?php $this->endPage();?>
