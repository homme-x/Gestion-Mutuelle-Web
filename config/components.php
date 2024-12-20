<?php

return [
    'request' => [
        'cookieValidationKey' => 'your_secret_key_here',
    ],
    'cache' => [
        'class' => 'yii\caching\FileCache',
    ],
    'user' => [
        'identityClass' => 'app\models\User',
        'enableAutoLogin' => true,
    ],
    'errorHandler' => [
        'errorAction' => 'site/error',
    ],
    'mailer' => [
        'class' => 'yii\swiftmailer\Mailer',
        'useFileTransport' => true,
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
    'db' => require(__DIR__ . '/db.php'),
    'urlManager' => [
        'class' => 'yii\web\UrlManager',
        'enablePrettyUrl' => true,
        'showScriptName' => false,
        'rules' => [
            // Routes pour l'administrateur
            'administrator/aides' => 'administrator/aides',
            'administrator/details-aide' => 'administrator/details-aide',
            'administrator/nouvelle-aide' => 'administrator/nouvelle-aide',
            'administrator/ajouter-aide' => 'administrator/ajouter-aide',
            'administrator/nouvelle-contribution' => 'administrator/nouvelle-contribution',
            'administrator/contributions' => 'administrator/contributions',
            'administrator/membres' => 'administrator/membres',
            'administrator/nouveau-membre' => 'administrator/nouveau-membre',
            'administrator/ajouter-membre' => 'administrator/ajouter-membre',
            'administrator/epargnes' => 'administrator/epargnes',
            'administrator/nouvelle-epargne' => 'administrator/nouvelle-epargne',
            'administrator/ajouter-epargne' => 'administrator/ajouter-epargne',
            'administrator/prets' => 'administrator/prets',
            'administrator/nouveau-pret' => 'administrator/nouveau-pret',
            'administrator/ajouter-pret' => 'administrator/ajouter-pret',
            
            // Routes par défaut
            '<controller:\w+>/<id:\d+>' => '<controller>/view',
            '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
            '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
        ],
    ],
    'assetManager' => [
        'bundles' => [
            'yii\web\JqueryAsset' => [
                'sourcePath' => null,
                'js' => [
                    '//code.jquery.com/jquery-3.6.0.min.js',
                ],
            ],
        ],
    ],
];
