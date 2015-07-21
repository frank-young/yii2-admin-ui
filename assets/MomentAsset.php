<?php
/**
 * Created by PhpStorm.
 * User: dggug
 * Date: 2015/7/21
 * Time: 14:18
 */

namespace iit\ui\assets;


use yii\web\AssetBundle;

class MomentAsset extends AssetBundle
{
    public $sourcePath = '@bower/moment';
    public $js = [
        'min/moment-with-locales.min.js'
    ];
}