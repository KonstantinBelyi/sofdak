<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ContentSite */

$this->title = 'Create Content Site';
$this->params['breadcrumbs'][] = ['label' => 'Content Sites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-site-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
