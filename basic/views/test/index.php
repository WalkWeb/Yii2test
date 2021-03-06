<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

$this->title = 'Список элементов';
$this->params['breadcrumbs'][] = $this->title;

?>

<h1><?= Html::encode($this->title) ?></h1>

<?php Pjax::begin() ?>

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
                <?php $form = ActiveForm::begin(['options' => ['data' => ['pjax' => 0]]]); ?>

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

<h2>Добавить новую запись</h2>

<?php $form = ActiveForm::begin(['options' => ['data' => ['pjax' => true]]]); ?>

<?= $form->field($test, 'code')->textInput(['maxlength' => true, 'value'=>false]) ?>

<?= $form->field($test, 'name')->textInput(['maxlength' => true, 'value'=>false]) ?>

<?= $form->field($test, 'population')->textInput(['value'=>false]) ?>

<?= '<input type="hidden" name="Test[type]" value="1" />' ?>

<div class="form-group">
    <?= Html::submitButton('Добавить', ['class' => 'btn btn-success', 'data-pjax'=>'1']) ?>
</div>

<?php ActiveForm::end(); ?>

<?php Pjax::end() ?>
