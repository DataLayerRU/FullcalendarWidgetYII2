<?php

namespace datalayerru\FullcalendarWidget\assets;

use yii\web\AssetBundle;

class FullcalendarAsset extends AssetBundle
{
    public $sourcePath = __DIR__.'/fullcalendar-2.3.1';
    public $js         = [
        'fullcalendar.min.js',
        'gcal.js',
        'lang-all.js'
    ];
    public $css = [
        'fullcalendar.min.css'
    ];

}