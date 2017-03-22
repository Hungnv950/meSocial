<?php
use yii\bootstrap\Nav;

?>
<aside class="main-sidebar">

    <section class="sidebar">

        <?=
        Nav::widget(
            [
                'encodeLabels' => false,
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    [
                        'label' => '<span class="glyphicon glyphicon-asterisk"></span> Admin', 'url' => ['/admin'],
                        'visible' => Yii::$app->user->can('Admin'),
                    ],
                    [
                        'label' => '<span class="glyphicon glyphicon-remove"></span> Band', 'url' => ['/band'],
                        'visible' => Yii::$app->user->can('Admin'),
                    ],
                    [
                        'label' => '<span class="glyphicon glyphicon-user"></span> User', 'url' => ['/user'],
                        'visible' => Yii::$app->user->can('userManagerment'),
                    ],
                    [
                        'label' => '<span class="glyphicon glyphicon-pencil"></span> Literature', 'url' => ['/literature']
                    ],
                ],
            ]
        );
        ?>

    </section>

</aside>
