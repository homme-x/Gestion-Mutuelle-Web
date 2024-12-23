<?php

return [
    'class' => 'app\components\RouteManager',
    'urlManager' => [
        'enablePrettyUrl' => true,
        'showScriptName' => false,
        'rules' => [
            // autres règles existantes
            'administrator/update-agape/<id:\d+>' => 'administrator/update-agape',
            'dette' => 'member/dette', // Crée une route courte "dette"
            'dettes' => 'member/dettes',
        ]
    ],

];