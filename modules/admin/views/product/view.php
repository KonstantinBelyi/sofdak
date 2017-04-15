<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Товары', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить этот товар?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php
    $img = $model->getImage();
    ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            [
                'attribute' => 'image',
                'value' => "<img src='{$img->getUrl('100x100')}'>",
                'format' => 'html',
            ],
            'content:html',
            'price',
            'keywords',
            'description',
            [
                'attribute' => 'status',
                'value' => !$model->status ?
                    '<span class="text-danger">Нет</span>'
                    :
                    '<span class="text-success">Да</span>',
                'format' => 'html',
            ],
//            'status',
        ],
    ]) ?>

</div>
