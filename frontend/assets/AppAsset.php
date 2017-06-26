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

        /*
         * Header and footer
         * */
        'css/font-awesome.min.css',
        'css/owl.carousel.css',
        'css/owl.theme.css',
        'css/resetDefalt.css',
        'css/setmedia.css',
        'css/nav-menu.css',
        'css/style.css',

        /*
         * index
         * */
        'css/main.css',
        /*
         * single page
         * */


    ];
    public $js = [
        /*
         * Header and footer
         * */
        'js/owl.carousel.js',
        'js/nav-menu.js',
        'js/style-main.js',
        'js/menu.js', // Giữ thanh menu luôn ở đầu

        /*
         * index
         * */
        'js/skel.min.js',
        'js/util.js',
        'js/main.js',

        /*
         * text editor
         * */
        '../../backend/web/tinymce/tinymce.min.js',
        '../../backend/web/js/main.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
