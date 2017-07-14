<?php

namespace alexeevdv\bootstrap;

use yii\web\AssetBundle;

/**
 * Class BootstrapToggleWidgetAsset
 * @package backend\assets
 */
class BootstrapToggleAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap-toggle';

    public $css = [
        'css/bootstrap-toggle.css',
    ];

    public $js = [
        'js/bootstrap-toggle.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
