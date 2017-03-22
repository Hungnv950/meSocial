<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\User;

/* @var $this yii\web\View */
/* @var $model backend\models\Literature */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Literatures'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="literature-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            [
//                    'label' => false,
                'attribute' => 'img',
                'format' => 'html',
                'value' => function ($data) {
                    return Html::img(Yii::$app->params['homeUrl'].'/uploads/imgs/'. $data['img'],
                        ['width' => '200px']);
                },
            ],
            'description',
            [
                'attribute' => 'content',
                'format' => 'html',
            ],
            'status',
            'view',
            'type',
            [
                'attribute' => 'created_at',
                'content' =>function($model){
                    return date('H:i - d/m/y', $model->created_at);
                },
                'headerOptions' => [
                    'style' => 'width: 100px; text-align:center'
                ]
            ],
            [
                'attribute' => 'updated_at',
                'content' =>function($model){
                    return date('H:i - d/m/y', $model->created_at);
                },
                'headerOptions' => [
                    'style' => 'width: 100px; text-align:center'
                ]
            ],
            [
                'attribute' => 'user_create',
                'content' =>function($model){
                    $user =  User::find()->where(['id'=>$model->user_create])->one();
                    return $user->username;
                },
                'headerOptions' => [
                    'style' => 'width: 100px; text-align:center'
                ]
            ],
            [
                'attribute' => 'user_update',
                'content' =>function($model){
                    $user =  User::find()->where(['id'=>$model->user_update])->one();
                    if (!empty($user)) {
                        return $user->username;
                    } else {
                        return null;
                    }

                },
                'headerOptions' => [
                    'style' => 'width: 100px; text-align:center'
                ]
            ],
            'comments:ntext',
        ],
    ]) ?>

</div>
