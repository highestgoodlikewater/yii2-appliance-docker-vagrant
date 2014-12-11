<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=' . $_SERVER['DB_PORT_3306_TCP_ADDR'] . ';dbname=' . $_SERVER['DB_NAME'],
            'username' => 'root',
            'password' => $_SERVER['DB_ENV_MYSQL_ROOT_PASSWORD'],
            'charset' => 'utf8',
        ],
        'cache' => [
            'class' => 'yii\redis\Cache',
            'redis' => [
                'hostname' => $_SERVER['REDIS_PORT_6379_TCP_ADDR'],
                'port' => $_SERVER['REDIS_PORT_6379_TCP_PORT'],
                'database' => $_SERVER['REDIS_NAME'],
            ]
        ],
        'assetManager' => [
            'linkAssets' => true,
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
