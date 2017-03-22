<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Auth;
use backend\models\Band;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <p>
        <?= Html::a(Yii::t('app', 'Create User'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'id',
                'header' => 'From',
                'format' => 'html',
                'value' => function($model) {
                    $result = Auth::find()->where(['user_id' => $model->id])->one();
                    if (!empty($result)) {
                        if ($result->source == 'https://graph.facebook.com') {
                            return Html::img(Yii::$app->params['homeUrl'].'/uploads/imgs/'. 'logo-facebook.png',
                                ['width' => '35px']);
                        } else {
                            return Html::img(Yii::$app->params['homeUrl'].'/uploads/imgs/'. 'logo-google.png',
                                ['width' => '35px']);
                        }
                    }
                    else{
                        return Html::img(Yii::$app->params['homeUrl'].'/uploads/imgs/'. 's.png',
                            ['width' => '35px']);
                    }
                },
                'headerOptions' => [
                    'style' => 'width: 30px; text-align:center'
                ]
            ],
            'username',
            'full_name',
            'email:email',
            'phone_number',
            [
                'attribute' => 'avatar',
                'format' => 'html',
                'value' => function ($data) {
                   if (!empty($data['avatar'])) {
                       return Html::img(Yii::$app->params['homeUrl'].'/uploads/imgs/'. $data['avatar'],
                           ['width' => '50px']);
                   }
                   else {
                       return Html::img(Yii::$app->params['homeUrl'].'/uploads/imgs/'. 'user.png',
                           ['width' => '50px']);
                   }
                },
            ],
            // 'auth_key',
            // 'password_hash',
            // 'password_reset_token',
            [
                'attribute' => 'status',
                'content' =>function($model){
                    $result = Band::find()->where(['status'=>$model->status])->one();
                    return $result->description;
                },
                'headerOptions' => [
                    'style' => 'width: 100px; text-align:center'
                ]
            ],
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
                    return date('H:i - d/m/y', $model->updated_at);
                },
                'headerOptions' => [
                    'style' => 'width: 100px; text-align:center'
                ]
            ],
//             'login_auth:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
