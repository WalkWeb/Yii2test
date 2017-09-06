<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="zountry-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'population')->textInput() ?>

    <img src="/uploads/<?= $model->imageFile ?>" alt="" /><br /><br />

    <?= $form->field($model, 'imageFile')->fileInput()->label('Новый логотип') ?>

    <div class="form-group">
        <?= Html::submitButton('Обновить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
