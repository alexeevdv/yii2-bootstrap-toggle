<?php

namespace alexeevdv\bootstrap;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

/**
 * Class BootstrapToggleWidget
 * @package alexeevdv\bootstrap
 */
class BootstrapToggleWidget extends InputWidget
{
    /**
     * @var string
     */
    public $labelEnabled;

    /**
     * @var string
     */
    public $labelDisabled;

    /**
     * @var mixed
     */
    public $valueEnabled = '1';

    /**
     * @var mixed
     */
    public $valueDisabled = '0';

    /**
     * @var string
     */
    public $container = 'div';

    /**
     * @var array
     */
    public $containerOptions = [];

    /**
     * @var array
     */
    public $pluginOptions = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        if ($this->labelEnabled === null) {
            $this->labelEnabled = Yii::t('yii', 'Yes');
        }
        if ($this->labelDisabled === null) {
            $this->labelDisabled = Yii::t('yii', 'No');
        }
        parent::init();
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        BootstrapToggleAsset::register($this->getView());

        $pluginOptions = ArrayHelper::merge([
            'on' => $this->labelEnabled,
            'off' => $this->labelDisabled,
            'onstyle' => 'success',
            'offstyle' => 'danger',
        ], $this->pluginOptions);

        $this->view->registerJs('
            $("#' . $this->getId() . '").bootstrapToggle(' . Json::encode($pluginOptions) . ');
        ');

        if ($this->container) {
            return Html::tag($this->container, $this->renderInput(), $this->containerOptions);
        }
        return $this->renderInput();
    }

    /**
     * @return string
     */
    protected function renderInput()
    {
        $checkboxOptions = [
            'label' => false,
            'id' => $this->getId(),
            'value' => $this->valueEnabled,
            'uncheck' => $this->valueDisabled,
        ];

        if ($this->model) {
            return Html::activeCheckbox($this->model, $this->attribute, $checkboxOptions);
        }
        return Html::checkbox($this->name, $this->value, $checkboxOptions);
    }
}
