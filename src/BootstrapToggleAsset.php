<?php

namespace alexeevdv\bootstrap;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * Class BootstrapToggleWidgetAsset
 * @package alexeevdv\bootstrap
 */
class BootstrapToggleAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/bootstrap-toggle';

    /**
     * @inheritdoc
     */
    public $css = [
        'css/bootstrap-toggle.css',
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'js/bootstrap-toggle.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        JqueryAsset::class,
    ];
}
