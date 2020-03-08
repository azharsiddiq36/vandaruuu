<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

use \yii\web\Request;
$baseUrl = str_replace('/frontend/web', '', (new Request)->getBaseUrl());

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [

        'request' => [
            'baseUrl' => $baseUrl,
        ],

        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        /*
         * artinya url kebijakan akan memanggil controller site dan function kebijakan
         */
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                ''=>'site/index',
                'kamar'=>'kamar/index',
                'detail'=>'site/detail',
                'kebijakan'=>'site/kebijakan',
                'pemesanan'=>'kamar/pesan',
                'pembayaran'=>'pembayaran/index',
                'fix_bayar'=>'pembayaran/bayar'
//                'kamar/rincian'=>'detail/index',
//                'rincian/<id:\d+>'=>'kamar/detail',
            ],
        ],

    ],
    'params' => $params,
];