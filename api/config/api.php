<?php
/**
 * Created by PhpStorm.
 * User: thanh
 * Date: 21/6/2016
 * Time: 5:30 PM
 */
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/../../backend/config/params.php'),
    require(__DIR__ . '/../../backend/config/params-local.php')
);

$components = require(__DIR__ . '/../../common/config/main-local.php');

$config = [
    'id' => 'api',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'modules' => [
        'v1' => [
            'basePath' => '@app/modules/v1',
            'class' => 'api\modules\v1\Api',
        ]
    ],
    'components' => [
      // Set this enable authentication in our API
      'user' => [
          'identityClass' => 'common\models\User',
          'enableAutoLogin' => false, // Don't forget to set Auto login to false
      ],
      'log' => [
          'traceLevel' => YII_DEBUG ? 3 : 0,
          'targets' => [
              [
                  'class' => 'yii\log\FileTarget',
                  'levels' => ['error', 'warning'],
                  // maintain api logs in api directory
                  //'logFile' => '@api/runtime/logs/error.log'
              ],
          ],
      ],
      'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => [
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => [
                        'v1/user',
                        'v1/item',
                        'v1/test',
                    ],
                    'tokens' => [
                        '{id}' => '<id:\\w+>'
                    ]
                ]
            ],
        ],
        'request' => [
            // Set Parser to JsonParser to accept Json in request
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ]
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        // Enable logging for API in a api Directory different than web directory
        'db' => $components['components']['db'],
    ],
    'params' => $params,
];

return $config;
