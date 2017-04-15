<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ContentSite */

$this->title = 'Контент сайта';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-site-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
            'about_hepatitis:html',
            'about_us:html',
        ],
    ]) ?>

</div>
