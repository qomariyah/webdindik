<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'name' => 'Dinas Pendidikan Kota Pekalongan',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '/' => 'site/index',
                'login' => 'site/login',
                'berita-utama' => 'site/daftar',
                'geografi' => 'halaman/geografi',
                'sejarah' => 'site/sejarah',
                [
                    'pattern' => 'index',
                    'route'   => 'site/index',
                    'suffix'  => '.html',
                ],
                [
                    'pattern' => 'album-foto/index',
                    'route'   => 'albumfoto/index',
                    'suffix'  => '.html',
                ],
                [
                    'pattern' => 'album-video/index',
                    'route'   => 'albumvideo/index',
                    'suffix'  => '.html',
                ],
                [
                    'pattern' => 'pengumuman/index',
                    'route'   => 'pengumuman/index',
                    'suffix'  => '.html',
                ],

                [
                    'pattern' => 'berita/<id>',
                    'route'   => 'site/view',
                    'suffix'  => '.html',
                ],
                [
                    'pattern' => 'album-foto/<id>',
                    'route'   => 'albumfoto/view',
                    'suffix'  => '.html',
                ],
                [
                    'pattern' => 'album-video/<id>',
                    'route'   => 'albumvideo/view',
                    'suffix'  => '.html',
                ],
                [
                    'pattern' => 'pengumuman/<id>',
                    'route'   => 'pengumuman/view',
                    'suffix'  => '.html',
                ],
                [
                    'pattern' => 'galeri-foto/<id>',
                    'route'   => 'albumfoto/viewfoto',
                    'suffix'  => '.html',
                ],
                [
                    'pattern' => 'galeri-video/<id>',
                    'route'   => 'albumvideo/viewvideo',
                    'suffix'  => '.html',
                ],
                [
                    'pattern' => 'sejarah/<id>',
                    'route'   => 'site/sejarah',
                    'suffix'  => '.html',
                ],
                // '<controller:\w+>/<id:\d+>' => '<controller>/view',
                // '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                // '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ],
        ],
    ],
    'params' => $params,
];
