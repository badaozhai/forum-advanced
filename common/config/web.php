<?php

Yii::setAlias('common', realpath(__DIR__ . '/../'));
Yii::setAlias('frontend', realpath(__DIR__ . '/../../frontend'));
Yii::setAlias('admin', realpath(__DIR__ . '/../../admin'));
Yii::setAlias('console', realpath(__DIR__ . '/../../console'));

$config = [
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',

    'components.cache' => [
        'class' => 'yii\caching\FileCache',
    ],

    'components.mail' => [
        'class' => 'yii\swiftmailer\Mailer',
        'viewPath' => '@common/mails',
    ],

    'components.db' => [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=yii2advanced',
        'username' => 'root',
        'password' => '123456',
        'charset' => 'utf8',
    ],
];

if (YII_ENV_DEV) {
    $config['preload'] = ['debug','log'];
    $config['modules']['debug'] = 'yii\debug\Module';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
