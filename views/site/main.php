<?php
/* 
 * Create By Mujib Masyhudi <mujib.masyhudi@gmail.com>
 * Create at {date('now')}
 */
use dee\angular\NgView;
?>

<?=
NgView::widget([
    'requires' => ['ngResource', 'ui.bootstrap', 'dee.angular'],
    'routes' => [
        '/' => [
            'view' => 'index',
            'js' => 'js/index.js',
//            'injection' => ['Coa',],
        ],
    ],
//    'resources' => [
//        'Coa' => [
//            'url' => '/biz3-fico/web/index.php/coa-rests/:id',
//            'actions' => [
//                'update' => [
//                    'method' => 'PUT'
//                ],
//                'view' => [
//                    'method' => 'GET',
//                ]
//            ]
//        ]
//    ]
]);
?>