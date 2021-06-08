<?php

namespace potime\wangEditor\assets;

use yii\web\AssetBundle;

class BaseAsset extends AssetBundle
{
    public $sourcePath = '@potime/wangEditor/dist';
    public $css = [
    ];
    public $js = [
        'wangEditor.min.js'
    ];
}
