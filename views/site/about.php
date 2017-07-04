<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Инфо';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Эта страница с информацией. С полезной конечно же.
    </p>

    <code><?= __FILE__ ?></code>
</div>
