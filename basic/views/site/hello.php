<?php

use yii\helpers\Html;

echo '<h1>'.Html::encode('hello gays !').'</h1>';
foreach ($names as $name) {
    print 'hello ' . $name . '<br>';
}