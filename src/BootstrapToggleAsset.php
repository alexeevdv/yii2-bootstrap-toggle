<?php

namespace alexeevdv\bootstrap;

use yii\web\AssetBundle;

/**
 * Class BootstrapToggleWidgetAsset
 * @package backend\assets
 */
class BootstrapToggleAsset extends AssetBundle
{
    public $basePath = '@bower/bootstrap-toggle';

    public $css = [
        'bootstrap-toggle.css',
    ];

    public $js = [
        'bootstrap-toggle.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
