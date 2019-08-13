<?php
    use app\common\services\UrlService;
?>

<div class="navbar-collapse collapse pull-left">
    <ul class="nav navbar-nav ">
        <li><a href="<?=UrlService::buildWwwUrl("/");?>">首页</a></li>
        <li><a target="_blank" href="http://www.54php.cn/">博客</a></li>
        <li><a href="<?=UrlService::buildWwwUrl("/web/user/login");?>">管理后台</a></li>
    </ul>
</div>