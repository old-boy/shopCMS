<?php
use app\common\services\UrlService;
?>

<div style="min-height: 500px;">
    <div class="mem_info">
        <span class="m_pic"><img src="<?=UrlService::buildWwwUrl("/uploads/avatar/20170313/159419a875565b1afddd541fa34c9e65.jpg");?>" /></span>
        <p>郭威</p>
    </div>
    <div class="fastway_list_box">
        <ul class="fastway_list">
            <li><a href="/admin/user/cart"><b class="wl_icon"></b><i class="right_icon"></i><span>购物车</span></a></li>
            <li><a href="/admin/user/order"><b class="morder_icon"></b><i class="right_icon"></i><span>我的订单</span></a></li>
            <li><a href="/admin/user/fav"><b class="fav_icon"></b><i class="right_icon"></i><span>我的收藏</span></a></li>
            <li><a href="/admin/user/comment"><b class="sales_icon"></b><i class="right_icon"></i><span>我的评论</span></a></li>
            <li><a href="/admin/user/address"><b class="locate_icon"></b><i class="right_icon"></i><span>收货地址</span></a></li>
        </ul>
    </div>
</div>