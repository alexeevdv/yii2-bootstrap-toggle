<?php

namespace tests\unit;

use alexeevdv\bootstrap\BootstrapToggleWidget;
use Yii;

/**
 * Class BootstrapToggleWidgetTest
 * @package tests\unit
 */
class BootstrapToggleWidgetTest extends \Codeception\Test\Unit
{
    /**
     * @var \tests\UnitTester
     */
    public $tester;

    /**
     * @test
     */
    public function testDefaultLabelsGenerated()
    {
        $widget = new BootstrapToggleWidget(['name' => 'input']);
        $this->tester->assertEquals(Yii::t('yii', 'Yes'), $widget->labelEnabled);
        $this->tester->assertEquals(Yii::t('yii', 'No'), $widget->labelDisabled);

        $widget = new BootstrapToggleWidget([
            'name' => 'input',
            'labelEnabled' => 'Да',
            'labelDisabled' => 'Нет',
        ]);
        $this->tester->assertEquals('Да', $widget->labelEnabled);
        $this->tester->assertEquals('Нет', $widget->labelDisabled);
    }
}
