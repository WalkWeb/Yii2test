<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Zountry */

$this->title = 'Update Zountry: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Zountries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="zountry-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


    <br /><br /><br /><br /><br /><br />
    <? ActiveForm::begin() ?>



    <? ActiveForm::end() ?>
    <br /><br /><br /><br /><br /><br />

</div>
