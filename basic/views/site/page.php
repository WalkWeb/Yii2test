<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\widgets\HelloWidget;
use yii\widgets\ActiveForm;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1>Test Page</h1>

    <p>
        Test text to page
    </p>


    <?php ActiveForm::begin([
        'id' => 'comment-form',
    ]); ?>

    <?php HTML::activeHiddenInput(['asdasd']) ?>


    <?php ActiveForm::end(); ?>




    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

    <code><?= __FILE__ ?></code>

    <br /><br />

    <?= '<p>123123</p>';

    //HelloWidget::widget(); ?>


</div>