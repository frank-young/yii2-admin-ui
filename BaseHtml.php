<?php
/**
 * Created by PhpStorm.
 * User: dggug
 * Date: 2015/7/27
 * Time: 9:04
 */

namespace iit\ui;


class BaseHtml extends \yii\bootstrap\BaseHtml
{
    public static function dateInput($name, $value = null, $options = [])
    {
        $options['data-toggle'] = 'date';
        return static::input('text', $name, $value, $options);
    }

    public static function timeInput($name, $value = null, $options = [])
    {
        $options['data-toggle'] = 'time';
        return static::input('text', $name, $value, $options);
    }

    public static function dateTimeInput($name, $value = null, $options = [])
    {
        $options['data-toggle'] = 'date-time';
        return static::input('text', $name, $value, $options);
    }
}