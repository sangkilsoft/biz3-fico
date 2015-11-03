<?php
use yii\helpers\Url;
use dee\angular\NgView;

/* @var $this yii\web\View */
?>
<?=
NgView::widget([
    'requires' => ['ngResource','ui.bootstrap','dee.ui'],
    'routes' => [
        '/' => [
            'view' => 'index',
            'js' => 'js/index.js',
            'injection' => ['accPeriode',],
        ],
        '/create' => [
            'view' => 'create',
            'js' => 'js/create.js',
            'injection' => ['accPeriode',],
        ],
        '/:id/edit' => [
            'view' => 'update',
            'js' => 'js/update.js',
            'injection' => ['accPeriode',],
        ],
        '/:id' => [
            'view' => 'view',
            'js' => 'js/view.js',
            'injection' => ['accPeriode',],
        ],
    ],
    'resources' => [
        'accPeriode' => [
        'url' => '/biz3-fico/web/index.php/fico/acc-periode-rests/:id',
            'actions' => [
                'update' => [
                    'method' => 'PUT'
                ],
                'view' => [
                    'method' => 'GET'
                ]
            ]
        ]
    ], 
]);?>
