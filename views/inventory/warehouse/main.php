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
            'injection' => ['warehouse',],
        ],
        '/create' => [
            'view' => 'create',
            'js' => 'js/create.js',
            'injection' => ['warehouse',],
        ],
        '/:id/edit' => [
            'view' => 'update',
            'js' => 'js/update.js',
            'injection' => ['warehouse',],
        ],
        '/:id' => [
            'view' => 'view',
            'js' => 'js/view.js',
            'injection' => ['warehouse',],
        ],
    ],
    'resources' => [
        'warehouse' => [
        'url' => '/biz3-fico/web/index.php/inventory/warehouse-rests/:id',
            'actions' =>[
                'update' => [
                    'method' => 'PUT'
                ],
                'view' => [
                    'method' => 'GET',
                    'params' => ['expand' => 'parent']
                ]
            ]
        ]
    ], 
]);?>
