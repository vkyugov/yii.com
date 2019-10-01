<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>
<?php
$this->registerJsFile('@web/js/hello.js', ['depends' => 'yii\web\YiiAsset']);
$this->registerJs("$('.mycnt').css('background-color', 'yellow');");
$this->registerCss('.mycnt{ font-size: 28px;}');
?>
<html>
<head>
    <title>my test</title>
</head>
<body>
    <div class="mycnt">
        <ul>
            <li role="presentation" class="active"> vasia</li>
            <li role="presentation"> petya</li>
        </ul>
        <button id="btn_test" class="btn btn-success">Run scripts</button>
        <button id="btn_hello" class="btn btn-success">Run Hello</button>
        <ul>
            <?php foreach ($names as $name){
                ?>
                <li> <?=$name; ?>
            <?php
            }?>

        </ul>

    </div>

        <?php $form = ActiveForm::begin(['options' => ['id' => 'testForm']]); ?>
        <?= $form->field($model, 'name')->label('My name'); ?>
        <?= $form->field($model, 'email'); ?>
        <?= $form->field($model, 'text')->textarea(['rows' => '10']); ?>
        <?= Html::submitButton('sent', ['class' => 'btn btn-success']); ?>
        <?php ActiveForm::end(); ?>

    <?php
    if (Yii::$app->session->hasFlash('success')){
        $message = Yii::$app->session->getFlash('success');
    }
    if (Yii::$app->session->hasFlash('error')){
        $message = Yii::$app->session->getFlash('error');
    }
    ?>


    <?php
    var_dump($cats);
    ?>
</body>
</html>