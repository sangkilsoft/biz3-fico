<?php
namespace app\assets;

/* 
 * Create By Mujib Masyhudi <mujib.masyhudi@gmail.com>
 * Create at {date('now')}
 */

use yii\web\AssetBundle;
use yii\web\View;

class AdminLteAsset extends AssetBundle
{
    public $sourcePath = '@bower';
    public $css = [
        'admin-lte/dist/css/AdminLTE.min.css',
        'admin-lte/dist/css/skins/_all-skins.min.css',
        'fontawesome/css/font-awesome.css.map',
        'fontawesome/css/font-awesome.min.css',
    ];
    public $js = [              
//        'bootstrap/dist/js/bootstrap.min.js',
//        'bootstrap/js/tooltip.js',        
//        'admin-lte/plugins/slimScroll/jquery.slimscroll.min.js',
//        'admin-lte/dist/js/app.min.js',        
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
    public $depends = [
        'yii\web\YiiAsset'
    ];
}