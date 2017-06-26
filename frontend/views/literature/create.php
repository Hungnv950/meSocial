<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Literature */

$this->title = Yii::t('app', 'Create Literature');
?>
<div class="literature-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
