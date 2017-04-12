<?php

/* @var $model app\models\Contact */

//debug($model);
?>

<div class="table-responsive">
    <table style="width: 100%; border: 1px solid #DDDDDD; border-collapse: collapse;">
        <tbody>

            <tr>
                <td style="padding: 8px; border: 1px solid #DDDDDD">Имя:</td>
                <td style="padding: 8px; border: 1px solid #DDDDDD"><?= $model->name ?></td>
            </tr>

            <tr>
                <td style="padding: 8px; border: 1px solid #DDDDDD">E-mail:</td>
                <td style="padding: 8px; border: 1px solid #DDDDDD"><?= $model->email ?></td>
            </tr>

            <tr>
                <td style="padding: 8px; border: 1px solid #DDDDDD">Телефон:</td>
                <td style="padding: 8px; border: 1px solid #DDDDDD"><?= $model->phone ?></td>
            </tr>

            <tr>
                <td style="padding: 8px; border: 1px solid #DDDDDD">Сообщение:</td>
                <td style="padding: 8px; border: 1px solid #DDDDDD"><?= $model->message ?></td>
            </tr>

        </tbody>
    </table>
</div>
