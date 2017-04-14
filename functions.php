<?php
function debug($arr)
{
    echo "<pre>" . print_r($arr, true) . "</pre>";
}

function passwordHash($str)
{
    $hash = Yii::$app->security->generatePasswordHash($str);
    return $hash;
}