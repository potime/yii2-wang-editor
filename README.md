wangEditor widget for Yii 2.0 Framework
======================

**Only supports wangEditor v3.0**

[wangEditor 官网](http://www.wangeditor.com/)

安装
------------

```
composer require potime/yii2-wang-editor "^1.0.0"
```

使用
-----

### widget
 
```php
<?php
use potime\wangEditor\widgets\WangEditorWidget;

echo WangEditorWidget::widget([
    'name' => 'inputName',
    // 'canFullScreen' => true, // 增加全屏的按钮
    // 'customConfig' => [], // 扩展配置
]);

// or

echo $form->field($model, 'content')->widget(WangEditorWidget::class, [
    // 'canFullScreen' => true,
    // 'uploadImageServer' => [
    //     '/file/wang-editor',
    // ],
]);
```

### action

```php
<?php

namespace admin\controllers;

use yii\web\Controller;
use potime\wangEditor\actions\UploadAction;

class FileController extends Controller
{
    public function actions()
    {
        return [
            'wang-editor' => [
                'class' => UploadAction::class,
                'savePath' => '@webroot/uploads',
                'displayPath' => '@web/uploads',
            ],
        ];
    }
}
```
