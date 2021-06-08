<?php

namespace potime\wangEditor\assets;

use yii\web\AssetBundle;

class FullScreenAsset extends AssetBundle
{
    public $sourcePath = '@potime/wangEditor/dist';
    public $css = [
        'wangEditor-fullscreen-plugin.css'
    ];
    public $js = [
        'wangEditor-fullscreen-plugin.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'potime\wangEditor\assets\BaseAsset'
    ];
}
