<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<?php if($name){ ?>
    <p>Вы ввели
        <br>имя: <?= $name; ?>
        <br>e-mail: <?= $email; ?>
    </p>
<?php } ?>



<?php $f = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?=$f->field($form, 'name'); ?>
    <?=$f->field($form, 'email'); ?>
    <?=$f->field($form, 'file')->fileInput(); ?>

    <?= Html::submitButton('Отправить'); ?>
<?php ActiveForm::end(); ?>
