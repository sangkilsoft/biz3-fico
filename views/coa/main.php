<?php

use yii\helpers\Url;
use dee\angular\NgView;

/* @var $this yii\web\View */
?>
<?=

NgView::widget([
    'requires' => ['ngResource', 'ui.bootstrap', 'dee.angular'],
    'routes' => [
        '/' => [
            'view' => 'index',
            'js' => 'js/index.js',
            'injection' => ['Coa',],
        ],
        '/create' => [
            'view' => 'create',
            'js' => 'js/create.js',
            'injection' => ['Coa',],
        ],
        '/:id/edit' => [
            'view' => 'update',
            'js' => 'js/update.js',
            'injection' => ['Coa',],
        ],
        '/:id' => [
            'view' => 'view',
            'js' => 'js/view.js',
            'injection' => ['Coa',],
        ],
    ],
    'resources' => [
        'Coa' => [
            'url' => '/biz3-fico/web/index.php/coa-rests/:id',
            'actions' => [
                'update' => [
                    'method' => 'PUT'
                ],
                'view' => [
                    'method' => 'GET',
                ]
            ]
        ]
    ]
]);
?>
