<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
                'css/site.css',
                'css/bootstrap.min.css',
                'css/font-awesome.min.css',
                'css/prettyPhoto.css',
                'css/price-range.css',
                'css/animate.css',
                'css/main.css',
                'css/responsive.css',
                'css/angular-material.min.css',
                'css/app.css',
                'css/select.css',
                'css/custom.css',
                'css/slicebox.css',
                'css/demo.css',
    ];
    public $js = [
        'libs/html5shiv.js',
        'libs/respond.js',
        'libs/angular-animate.min.js',
        'libs/angular-aria.min.js',
        'libs/angular-material.min.js',
        'libs/ui-bootstrap-tpls-1.1.2.min.js',
        'libs/select.js',
        'js/app.js',
        'libs/jquery.js',
        'libs/bootstrap.min.js',
        'libs/jquery.scrollUp.min.js',
        'libs/price-range.js',
        'libs/jquery.prettyPhoto.js',
        'libs/main.js',
        'libs/jquery.slicebox.js',
        'libs/modernizr.custom.46884.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
