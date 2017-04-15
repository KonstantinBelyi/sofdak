<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

mihaildev\elfinder\Assets::noConflict($this);

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div style="color:#999;">
        <i>*Можно загрузить форматы только png и jpg.</i>
    </div>

    <?php
    $Img = $model->getImage();
    ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <div class="container" style="margin: 15px 0">

        <?= Html::img($Img->getUrl('100x100'), ['alt' => '']) ?>

    </div>

    <?= Html::a('Удалить фото', ['remove', 'id' => $model->id], [
        'class' => 'btn btn-xs btn-danger',
        'data' => [
            'confirm' => 'Вы уверены, что хотите удалить фото?',
            'method' => 'post',
        ],
    ]) ?>

    <?php
    echo $form->field($model, 'content')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),
    ]);
    ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->checkbox([ '0', '1', ], false) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
