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
            'injection' => ['AccPeriode',],
        ],
        '/create' => [
            'view' => 'create',
            'js' => 'js/create.js',
            'injection' => ['AccPeriode',],
        ],
        '/:id/edit' => [
            'view' => 'update',
            'js' => 'js/update.js',
            'injection' => ['AccPeriode',],
        ],
        '/:id' => [
            'view' => 'view',
            'js' => 'js/view.js',
            'injection' => ['AccPeriode',],
        ],
    ],
    'resources' => [
        'AccPeriode' => [
            'url' => '/biz3-fico/web/index.php/fico/acc-periode-rests/:id',
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
