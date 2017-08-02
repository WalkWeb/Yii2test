<?php

?>


<h1>&nbsp;</h1>
<ul>
    <?php foreach ($tests as $test): ?>
    <li>
        <? echo $test->name.' | '.$test->code.' | '.$test->population.' | <a href="/test/'.$test->id.'" title="">Редактировать</a>' ?>
    </li>
    <?php endforeach; ?>
</ul>


