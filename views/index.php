<?php
/* @var $this yii\web\View */
/* @var $options array */
/* @var $pluginOptions array */

use yii\helpers\Html;
use yii\helpers\Json;
use datalayerru\FullcalendarWidget\assets\FullcalendarAsset;

FullcalendarAsset::register($this);
?>

<?= Html::tag('div', $options); ?>

<?php
$this->registerJs("
    function addZero(i) {
        return (i < 10)? '0' + i: i;
    }
    $('".$options['id']."').fullCalendar(".Json::encode($pluginOptions).");");
?>