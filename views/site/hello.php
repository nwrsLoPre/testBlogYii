<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'hello';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-hello">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        It is :HelloWorldPage:
    </p>
    <p>
        <?= $message; ?>
    </p>

    <code><?= __FILE__ ?></code>
</div>
