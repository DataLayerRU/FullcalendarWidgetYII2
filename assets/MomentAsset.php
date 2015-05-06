<?php

namespace datalayerru\FullcalendarWidget\assets;

use yii\web\AssetBundle;

class MomentAsset extends AssetBundle
{
    public $sourcePath = '@bower/moment/min';
    public $js         = [
        'moment-with-locales.min.js'
    ];

}