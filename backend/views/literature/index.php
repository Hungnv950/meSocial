<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use common\models\User;
/* @var $this yii\web\View */
/* @var $searchModel common\models\LiteratureSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Literatures');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="literature-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Literature'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn',
                'header' => 'STT',
                'headerOptions' => [
                    'style' => 'width: 10px; text-align:center'
                ]
            ],
            'title',
            [
                'attribute' => 'img',
                'format' => 'html',
                'value' => function ($data) {
                    return Html::img(Yii::$app->params['homeUrl'].'/uploads/imgs/'. $data['img'],
                        ['width' => '200px']);
                },
            ],
//            [
//                'attribute' => 'description',
//                'contentOptions' => ['style' => 'width:150px;'],
//            ],
//            [
//                'attribute' => 'content',
//                'format' => 'html',
//            ],
             'status',
             'view',
            [
                'attribute' => 'type',
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
//            [
//                'attribute' => 'user_update',
//                'content' =>function($model){
//                    $user =  User::find()->where(['id'=>$model->user_update])->one();
//                    if (!empty($user)) {
//                        return $user->username;
//                    } else {
//                        return null;
//                    }
//
//                },
//                'headerOptions' => [
//                    'style' => 'width: 100px; text-align:center'
//                ]
//            ],
            [
                'attribute' => 'created_at',
                'content' =>function($model){
                    return date('H:i - d/m/y', $model->created_at);
                },
                'headerOptions' => [
                    'style' => 'width: 100px; text-align:center'
                ]
            ],
//            [
//                'attribute' => 'updated_at',
//                'content' =>function($model){
//                    return date('H:i - d/m/y', $model->updated_at);
//                },
//                'headerOptions' => [
//                    'style' => 'width: 100px; text-align:center'
//                ]
//            ],
            // 'created_at',
            // 'comments:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
