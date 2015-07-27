<?php
/**
 * Created by PhpStorm.
 * User: dggug
 * Date: 2015/7/21
 * Time: 14:06
 */

namespace iit\ui\assets;


use yii\web\AssetBundle;

class DatetimePickerAsset extends AssetBundle
{
    public $sourcePath = '@bower/eonasdan-bootstrap-datetimepicker';
    public $css = [
        'build/css/bootstrap-datetimepicker.min.css',
    ];
    public $js = [
        'build/js/bootstrap-datetimepicker.min.js'
    ];
    public $depends = [
        'iit\ui\assets\MomentAsset'
    ];
}