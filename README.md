# FullcalendarWidgetYII2
[Yii2](http://www.yiiframework.com/) widget. Wrapper for [FullCalendar](http://fullcalendar.io/)

## Composer

FullcalendarWidgetYII2 is available through [composer](https://getcomposer.org/)

  composer require professionalweb/fullcalendar-widget-yii2 "dev-master"
  
Alternatively you can add the following to the `require` section in your `composer.json` manually:

```json
"fullcalendar-widget-yii2": "dev-master"
```

Run `composer update` afterwards.

### In your PHP project
### Data

Example:

```php
use yii\web\JsExpression;
use professionalweb\FullcalendarWidget\FullcalendarWidget;

echo FullcalendarWidget::widget([
    'options' => [
        'id' => 'calendar'
    ],
    'pluginOptions' => [
        'header' => [
            'left' => 'prev,next today',
            'center' => 'title',
            'right' => 'month,agendaWeek,agendaDay'
        ],
        'lang' => 'ru',
        'firstDay' => 1,
        'selectable' => true,
        'events' => $data,
        'select' => new JsExpression('function(start, end, allDay) {
                console.log(addZero(start.date())+"."+addZero(start.month()+1)+"."+start.year());
            }
        ')
    ]
]);
```

## Dependencies
- [Yii2](http://www.yiiframework.com/)
- [moment](http://momentjs.com/)
- [jQuery](http://jquery.com/)

## The MIT License

The MIT License (MIT)

Copyright (c) 2016 Sergey Zinchenko, [Professional web](http://web-development.pw/)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.