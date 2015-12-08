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
            'injection' => ['Sales',],
        ],
        '/create' => [
            'view' => 'create',
            'js' => 'js/create.js',
            'injection' => ['Sales',],
        ],
        '/:id/edit' => [
            'view' => 'update',
            'js' => 'js/update.js',
            'injection' => ['Sales',],
        ],
        '/:id' => [
            'view' => 'view',
            'js' => 'js/view.js',
            'injection' => ['Sales',],
        ],
    ],
    'resources' => [
        'Sales' => [
        'url' => '/biz3-fico/web/index.php/sales/sales-rests/:id',
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
