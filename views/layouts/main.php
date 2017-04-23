<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use app\assets\LtIeAppAsset;

AppAsset::register($this);
LtIeAppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" xmlns="http://www.w3.org/1999/html">

<head>

    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <?= Html::csrfMetaTags() ?>
    <?php $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'href' => '/web/icon2.jpg'])?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

</head>

<body id="page-top" class="index">
<?php $this->beginBody() ?>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#page-top">Sof-dak</a>

            <p id="contacts">
                <?= Yii::$app->params['adminEmail']?> <br>
                +38 096-828-78-17 <br>
                +38 066-236-44-53
            </p>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="#product">Препараты</a>
                </li>
                <li class="page-scroll">
                    <a href="#hepatitis">Что нужно знать? </a>
                </li>
                <li class="page-scroll">
                    <a href="#about">О нас</a>
                </li>
                <li class="page-scroll">
                    <a href="#delivery">Доставка</a>
                </li>
                <li class="page-scroll">
                    <a href="#contact">Контакты</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<?= $content ?>

<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
