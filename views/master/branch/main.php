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
            'injection' => ['branch',],
        ],
        '/create' => [
            'view' => 'create',
            'js' => 'js/create.js',
            'injection' => ['branch',],
        ],
        '/:id/edit' => [
            'view' => 'update',
            'js' => 'js/update.js',
            'injection' => ['branch',],
        ],
        '/:id' => [
            'view' => 'view',
            'js' => 'js/view.js',
            'injection' => ['branch',],
        ],
    ],
    'resources' => [
        'branch' => [
        'url' => '/biz3-fico/web/index.php/master/branch-rests/:id',
            'actions' =>[
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
