<?php

$this->title = 'Test Ajax';
$this->params['breadcrumbs'][] = $this->title;

?>

<h1><?= $this->title ?></h1>

<!--
<br /><br />
<button class="btn btn-success" id="btn">Link</button>
-->
<br /><br />

<p>Компания:</p>
<input type="text" list="dlist" id="input" class="form-control" name="company" maxlength="100" oninput="onInput()">
<datalist id="dlist">
    <option value="Простоквашино">Простоквашино</option>
    <option value="Подмышкино">Подмышкино</option>
    <option value="Uremont">Uremont</option>
</datalist>
<br />

<p>Сайт:</p>
<input type="text" list="site" id="site" class="form-control" name="site" maxlength="100">
<br />

<p>Расположение центрального офиса:</p>
<input type="text" list="city" id="city" class="form-control" name="city" maxlength="100">
<br />

<p>Организационно-правовая форма:</p>
<input type="text" list="org" id="org" class="form-control" name="org" maxlength="100">
<br />

<p>Количество сотрудников:</p>
<input type="text" list="number" id="number" class="form-control" name="number" maxlength="100">

<br /><br /><br /><br /><br /><br />

<?php

$js = <<<JS
    $('#btn').on('click', function(){
       
        $.ajax({
            url: '',
            data: {test: '123'},
            type: 'POST',
            success: function(res){
                console.log(res);
            },
            error: function(){
                alert('Error!');
            }
        });
    });
    
JS;
$this->registerJs($js);

?>
