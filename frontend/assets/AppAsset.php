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
        'css/style-custom.css',
        'css/bootstrap.min.css',
        'css/animate.css',
        'css/classy-nav.min.css',
        'css/custom-icon.css',
        'css/font-awesome.min.css',
        'css/magnific-popup.css',
        'css/nice-select.min.css',
        'css/owl.carousel.min.css',
        'css/site.css',
    ];
    public $js = [
        'js/jquery/jquery-2.2.4.min.js',
        'js/bootstrap/popper.min.js',
        'js/bootstrap/bootstrap.min.js',
        'js/plugins/plugins.js',
        'js/active.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
