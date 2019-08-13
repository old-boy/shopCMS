<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\DefaultAsset;
use \app\common\services\UrlService;

DefaultAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/5.10.0-11/css/all.min.css">
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="wrap">
        <div class="navbar navbar-inverse" role="navigation">
            <div class="container">
                <?php $this->beginContent('@app/views/layouts/web/top_nav.php'); ?>
                <?php $this->endContent(); ?>
            </div>
        </div>
        <?= $content ?>
        <?php $this->beginContent('@app/views/layouts/web/footer.php'); ?>
        <?php $this->endContent(); ?>
    </div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>