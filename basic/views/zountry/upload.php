<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<br /><br /><br /><br /><br /><br />

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'imageFile')->fileInput() ?>

<div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end() ?>
