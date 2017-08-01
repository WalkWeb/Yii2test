<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Ajax';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Ajax Page
    </p>

    <p>
        <?
            echo '<pre>';
            var_dump($country);
            echo '</pre>';
        ?>
    </p>

    <p>
        <?= $country->name; ?> <?= $country['population']; ?>
    </p>

</div>
