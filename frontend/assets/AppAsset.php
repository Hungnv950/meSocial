<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/owl.carousel.css',
        'css/owl.theme.css',
        'css/resetDefalt.css',
        'css/setmedia.css',
        'css/nav-menu.css',
        'css/style.css',
    ];
    public $js = [
//        'js/jquery-1.11.1.min.js',
        'js/owl.carousel.js',
        'js/nav-menu.js',
        'js/style-main.js',
        'js/menu.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
