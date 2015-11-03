<?php
use yii\helpers\Url;
use dee\angular\NgView;

/* @var $this yii\web\View */
?>
<?=
NgView::widget([
    'requires' => ['ngResource','ui.bootstrap','dee.angular'],
    'routes' => [
        '/' => [
            'view' => 'index',
            'js' => 'js/index.js',
            'injection' => ['GlHeader',],
        ],
        '/create' => [
            'view' => 'create',
            'js' => 'js/create.js',
            'injection' => ['GlHeader',],
        ],
        '/:id/edit' => [
            'view' => 'update',
            'js' => 'js/update.js',
            'injection' => ['GlHeader',],
        ],
        '/:id' => [
            'view' => 'view',
            'js' => 'js/view.js',
            'injection' => ['GlHeader',],
        ],
    ],
    'resources' => [
        'GlHeader' => [
            'url' => '/biz3-fico/web/index.php/fico/gl-rests/:id',
            'actions' =>[
                'update' => [
                    'method' => 'PUT'
                ],
                'view' => [
                    'method' => 'GET',
                ]
            ]
        ]
    ]
]);?>
