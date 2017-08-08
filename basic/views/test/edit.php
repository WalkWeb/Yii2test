<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
?>


<h1>Редактирование элемента <?= $test->name ?></h1>
<br /><br />

<?php Pjax::begin(); ?>

<?php if (Yii::$app->session->hasFlash('FormSubmitted')): ?>

    <div class="alert alert-success">
        Данные успешно обновлены
    </div>

<?php endif; ?>

<?
    echo '<pre>';
    var_dump($test);
    echo '</pre>';
?>



<?php $form = ActiveForm::begin(['action'=>'/test/']); ?>

<?= $form->field($test, 'code')->textInput(['maxlength' => true]) ?>

<?= $form->field($test, 'name')->textInput(['maxlength' => true]) ?>

<?= $form->field($test, 'population')->textInput() ?>

<div class="form-group">
    <?= Html::submitButton('Отредактировать', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>

<?php Pjax::end(); ?>



<br /><br />
<p><a href="/test/" title="">Вернуться к списку</a></p>







