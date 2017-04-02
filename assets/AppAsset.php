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
//        'css/site.css',
        'css/bootstrap.min.css',
        'css/freelancer.css',
        'font-awesome/css/font-awesome.min.css',
        'http://fonts.googleapis.com/css?family=Montserrat:400,700',
    ];
    public $js = [
        'js/jquery-1.10.2.js',
        'js/bootstrap.min.js',
        'http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js',
        'js/classie.js',
        'js/cbpAnimatedHeader.js',
        'js/freelancer.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
