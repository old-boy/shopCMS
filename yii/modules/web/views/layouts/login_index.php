<?php
use app\common\services\UrlService;
use app\assets\WebAsset;
WebAsset::register($this);
?>

<?php $this->beginPage();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>管理后台</title>
    <?php $this->head();?>
</head>
<body style="background-color:#f2f2f2;">
    <?php $this->beginBody();?>
    <div id="wrapper">
        <!-- 动态数据 -->
        <?= $content; ?>
    </div>
    <?php $this->endBody();?>
</body>
</html>
<?php $this->endPage();?>