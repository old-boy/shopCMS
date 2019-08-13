<?php
use app\common\services\UrlService;
?>

<div style="min-height: 500px;">
    <div class="page_title clearfix">
        <span>我的收藏</span>
    </div>
	<ul class="fav_list">
		<li>
		<a href="/admin/product/info?id=2">
			<i class="pic"><img src="<?=UrlService::buildWwwUrl("/uploads/book/20170303/a8887738ab1bfd71765dd063fee4ddaa.jpg");?>" style="height: 100px;width: 100px;" /></i>
			<h2>php开发教程</h2>
			<b>¥ 45.00</b>
		</a>
		<span class="del_fav" data="4"><i class="del_fav_icon"></i></span>
	</li>
		<li>
		<a href="/admin/product/info?id=1">
			<i class="pic"><img src="<?=UrlService::buildWwwUrl("/uploads/book/20170301/7a976289c2c1f551a4f21232575ba255.jpg");?>" style="height: 100px;width: 100px;" /></i>
			<h2>浪潮之巅</h2>
			<b>¥ 88.88</b>
		</a>
		<span class="del_fav" data="3"><i class="del_fav_icon"></i></span>
	</li>
	</ul>
</div>