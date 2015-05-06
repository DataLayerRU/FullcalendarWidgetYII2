<?php

namespace datalayerru\FullcalendarWidget;

class FullcalendarWidget extends \yii\base\Widget
{
    public $options       = [];
    public $pluginOptions = [];

    public function run()
    {
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }

        return $this->render('index',
                        [
                    'options' => $this->options,
                    'pluginOptions' => $this->pluginOptions
        ]);
    }
}