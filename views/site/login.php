<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\assets\AppAsset;

AppAsset::register($this);

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" xmlns="http://www.w3.org/1999/html">

<head>

    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

</head>

<body>
<?php $this->beginBody() ?>

    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">

            <div class="col-lg-12 text-center">
                <h3><?= Html::encode($this->title) ?></h3>
            </div>

            <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div class="form-group col-xs-12">
                    <?= Html::submitButton('Войти', ['class' => 'btn btn-lg btn-success']) ?>
                </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>

<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>