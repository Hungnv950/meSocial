<?php
return [
    'modules' => [
        'admin' => [
            'class' => 'mdm\admin\Module',
            'layout' => 'left-menu',
            'mainLayout' => '@app/views/layouts/main.php',
            'menus' => [
                'assignment' => [
                    'label' => 'Grant Access' // change label
                ],
                'route' => null, // disable menu
                'role' =>null,
                'rule' => null,
                'user' => null,
            ],
        ]
    ],
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=mesocial',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\DbManager'
        ],
//        'user' => [
//            'identityClass' => 'mdm\admin\models\User',
//            'loginUrl' => ['admin/user/login'],
//        ]
    ],
//     'as access' => [
//         'class' => 'mdm\admin\components\AccessControl',
//         'allowActions' => [
//             'site/*',
//             'literature/*',
////             'admin/*',
////             'some-controller/some-action',
////             The actions listed here will be allowed to everyone including guests.
////             So, 'admin/*' should not appear here in the production, of course.
////             But in the earlier stages of your development, you may probably want to
////             add a lot of actions here until you finally completed setting up rbac,
////             otherwise you may not even take a first step.
//         ]
//     ],
];
