<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ContentSite */

$this->title = 'Редактор';
$this->params['breadcrumbs'][] = ['label' => 'Контент сайта', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Редактор';
?>
<div class="content-site-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
