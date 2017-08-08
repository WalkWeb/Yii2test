<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

?>

<h1>Список элементов</h1>

<table border="1" style="width: 100%;">
    <tr>
        <td>
            <p><b>Страна</b></p>
        </td>
        <td>
            <p><b>Код</b></p>
        </td>
        <td>
            <p><b>Население</b></p>
        </td>
        <td>
            <p></p>
        </td>
    </tr>
    <?php foreach ($tests as $test): ?>
        <tr>
            <td>
                <p><?= $test->name ?></p>
            </td>
            <td>
                <p><?= $test->code ?></p>
            </td>
            <td>
                <p><?= $test->population ?></p>
            </td>
            <td>
            </td>
        </tr>
        <tr>
            <td>
                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($test, 'name')->textInput(['maxlength' => true]) ?>
            </td>
            <td>
                <?= $form->field($test, 'code')->textInput(['maxlength' => true]) ?>
            </td>
            <td>
                <?= $form->field($test, 'population')->textInput() ?>

                <?= $form->field($test, 'id')->hiddenInput()->label('') ?>

                <?= '<input type="hidden" name="Test[type]" value="2" />' ?>
            </td>
            <td>
                <div class="form-group">
                    <?= Html::submitButton('Отредактировать', ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<br /><br /><br />

<h2>Добавить новую запись</h2>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($test, 'code')->textInput(['maxlength' => true, 'value'=>false]) ?>

<?= $form->field($test, 'name')->textInput(['maxlength' => true, 'value'=>false]) ?>

<?= $form->field($test, 'population')->textInput(['value'=>false]) ?>

<?= '<input type="hidden" name="Test[type]" value="1" />' ?>

<div class="form-group">
    <?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>



<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />