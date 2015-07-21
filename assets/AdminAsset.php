<?php
/**
 * Created by PhpStorm.
 * User: dggug
 * Date: 2015/7/21
 * Time: 14:09
 */

namespace iit\ui\assets;


use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $sourcePath = '@vendor/iit/yii2-admin-ui/asset';
    public $css = [
        'css/admin.css'
    ];
    public $js = [
        'js/admin.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        '\admin\assets\DatetimePickerAsset'
    ];
}