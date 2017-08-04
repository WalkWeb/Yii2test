<?php

?>

<h1>Список элементов</h1>

<table style="width: 100%">
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
                <p><a href="/test/<?= $test->id ?>" title="">Редактировать</a></p>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
