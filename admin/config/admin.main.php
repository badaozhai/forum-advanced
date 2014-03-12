<?php
$rootDir = dirname(dirname(__DIR__));

$web = array_merge(
    require($rootDir . '/common/config/web.php'),
    require(__DIR__ . '/params.php')
);

return [
    'id' => 'Yiier社区后台管理',
    'basePath' => dirname(__DIR__),
    'vendorPath' => $rootDir . '/vendor',
    'preload' => $web['preload'],
    'controllerNamespace' => 'admin\controllers',
    'extensions' => require($rootDir . '/vendor/yiisoft/extensions.php'),
    'components' => [
        'db' => $web['components.db'],
        'cache' => $web['components.cache'],
        'mail' => $web['components.mail'],
        'user' => [
            'identityClass' => 'common\models\User',
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
    ],
    'modules' => $web['modules'],
    //'params' => $web,
];