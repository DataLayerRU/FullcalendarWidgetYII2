<?php

namespace datalayerru\FullcalendarWidget\assets;

use yii\web\AssetBundle;

class FullcalendarAsset extends AssetBundle
{
    public $sourcePath = '@vendor/datalayerru/fullcalendar-widget-yii2/assets/fullcalendar-2.3.1';
    public $js         = [
        'fullcalendar.min.js',
        'gcal.js',
        'lang-all.js'
    ];
    public $css        = [
        'fullcalendar.min.css'
    ];
    public $depends    = [
        'yii\web\YiiAsset'
    ];

}