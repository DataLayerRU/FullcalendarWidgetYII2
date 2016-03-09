<?php

namespace professionalweb\FullcalendarWidget\assets;

use yii\web\AssetBundle;

class FullcalendarAsset extends AssetBundle
{
    public $sourcePath = '@vendor/professionalweb/fullcalendar-widget-yii2/assets/fullcalendar-2.3.1';
    public $js         = [
        'fullcalendar.min.js',
        'gcal.js',
        'lang-all.js'
    ];
    public $css        = [
        'fullcalendar.min.css'
    ];
    public $depends    = [
        'yii\web\YiiAsset',
        'professionalweb\FullcalendarWidget\assets\MomentAsset'
    ];

}