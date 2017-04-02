<?php
namespace app\assets;

use yii\web\AssetBundle;

class LtIeAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $js = [
        'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js',
        'https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js',
    ];

    public $jsOptions =[
        'condition' => 'lt IE 9',
        'position' => \yii\web\View::POS_HEAD,
    ];
}