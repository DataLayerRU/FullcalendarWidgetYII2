<?php

namespace professionalweb\FullcalendarWidget;

class FullcalendarWidget extends \yii\base\Widget
{
    /**
     * Div's options
     *
     * @var array
     */
    public $options       = [];

    /**
     * Fullcalendar's options
     *
     * @var array
     */
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