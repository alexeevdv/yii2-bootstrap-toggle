<?php

namespace alexeevdv\bootstrap;

use Yii;
use yii\helpers\Html;
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
    public $labelTrue;

    /**
     * @var string
     */
    public $labelFalse;

    /**
     * @var string
     */
    public $container = 'div';

    /**
     * @var array
     */
    public $containerOptions = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        if (!$this->labelTrue) {
            $this->labelTrue = Yii::t('yii', 'Yes');
        }
        if (!$this->labelFalse) {
            $this->labelFalse = Yii::t('yii', 'No');
        }
        parent::init();
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        BootstrapToggleAsset::register($this->getView());

        $this->view->registerJs("
            
            $('#".Html::getInputId($this->model, $this->attribute)."').bootstrapToggle({
                on: '".$this->true."',
                off: '".$this->false."',
                onstyle: 'success',
            });
        ");

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
        if ($this->model) {
            return Html::activeCheckbox($this->model, $this->attribute, ['label' => false]);
        }
        return Html::checkbox($this->name, $this->value, ['label' => false]);
    }
}
