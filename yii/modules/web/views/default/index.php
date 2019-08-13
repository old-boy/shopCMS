<?php

use \app\common\services\UrlService;
?>
<div class="wrap">
    <!-- header -->
    <div class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <?php $this->beginContent('@app/modules/layouts/common/top_nav.php'); ?>
            <?php $this->endContent(); ?>
        </div>
    </div>
    <div id="wrapper">
        <!-- sidebar -->
        <?php $this->beginContent('@app/modules/layouts/common/sidebar.php'); ?>
        <?php $this->endContent(); ?>

        <!-- page -->
        <div id="page-wrapper" class="gray-bg" style="background-color: #ffffff;">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="javascript:void(0);"><i class="fa fa-bars"></i> </a>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message">
                                欢迎使用编程浪子图书商城管理后台
                            </span>
                        </li>
                        <li class="hidden">
                            <a class="count-info" href="javascript:void(0);">
                                <i class="fa fa-bell"></i>
                                <span class="label label-primary">8</span>
                            </a>
                        </li>
                        <li class="dropdown user_info">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);">
                                <img alt="image" class="img-circle" src="<?= UrlService::buildWwwUrl("/images/web/avatar.png"); ?>" />
                            </a>
                            <ul class="dropdown-menu dropdown-messages">
                                <li>
                                    <div class="dropdown-messages-box">
                                        姓名：编程浪子郭大爷 <a href="/web/user/edit" class="pull-right">编辑</a>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="dropdown-messages-box">
                                        手机号码：11012345679 </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="link-block text-center">
                                        <a class="pull-left" href="/web/user/reset-pwd">
                                            <i class="fa fa-lock"></i> 修改密码
                                        </a>
                                        <a class="pull-right" href="/web/user/logout">
                                            <i class="fa fa-sign-out"></i> 退出
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- content -->
        <?php $this->beginContent('@app/modules/web/view/user/edit.php'); ?>
        <?php $this->endContent(); ?>
    </div>
</div>