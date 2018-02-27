<?php

use yii\widgets\ActiveForm;

?>

<h1>TestForm</h1>

<div>
    <?php $a = ActiveForm::begin(['action'=> '/testform', 'options' => ['enctype' => 'multipart/form-data']]); ?>
</div>
<div>
    <div class="form-group" id="form">
        <p>Напишите город:</p>
        <input class="form-control" name="city">
    </div>
</div>
<div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Отправить</button>
    </div>

    <div><?php ActiveForm::end(); ?></div>
</div>


<button type="submit" onclick="reform()">Заменить форму</button>




