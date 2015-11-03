<?php

use yii\helpers\Url;
use dee\angular\NgView;

/* @var $this yii\web\View */
?>
<?=

NgView::widget([
    'requires' => ['ngResource', 'ui.bootstrap', 'dee.ui'],
    'routes' => [
        '/' => [
            'view' => 'index',
            'js' => 'js/index.js',
            'injection' => ['coa',],
        ],
        '/create' => [
            'view' => 'create',
            'js' => 'js/create.js',
            'injection' => ['coa',],
        ],
        '/:id/edit' => [
            'view' => 'update',
            'js' => 'js/update.js',
            'injection' => ['coa',],
        ],
        '/:id' => [
            'view' => 'view',
            'js' => 'js/view.js',
            'injection' => ['coa',],
        ],
    ],
    'resources' => [
        'coa' => [
            'url' => '/biz3-fico/web/index.php/fico/coa-rests/:id',
            'paramDefaults' => ['expand' => 'parent,coas', 'field' => 'id,code,name,type,normal_balance,parent_id'],
            'actions' => [
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
]);
?>
