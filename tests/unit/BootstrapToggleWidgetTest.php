<?php

namespace tests\unit;

use alexeevdv\yii\BootstrapToggleAsset;
use alexeevdv\yii\BootstrapToggleWidget;
use Codeception\Stub;
use Exception;
use Yii;
use yii\base\DynamicModel;
use yii\web\View;

/**
 * Class BootstrapToggleWidgetTest
 * @package tests\unit
 */
class BootstrapToggleWidgetTest extends \Codeception\Test\Unit
{
    /**
     * @test
     */
    public function defaultLabelsGenerated()
    {
        $widget = new BootstrapToggleWidget(['name' => 'input']);
        $this->assertEquals(Yii::t('yii', 'Yes'), $widget->labelEnabled);
        $this->assertEquals(Yii::t('yii', 'No'), $widget->labelDisabled);

        $widget = new BootstrapToggleWidget([
            'name' => 'input',
            'labelEnabled' => 'Да',
            'labelDisabled' => 'Нет',
        ]);
        $this->assertEquals('Да', $widget->labelEnabled);
        $this->assertEquals('Нет', $widget->labelDisabled);
    }

    /**
     * @test
     * @throws Exception
     */
    public function assetsRegistered()
    {
        $widget = new BootstrapToggleWidget(['name' => 'input']);
        $widget->setView(Stub::makeEmpty(View::class, [
            'registerAssetBundle' => Stub\Expected::once(function($class) {
                $this->assertEquals(BootstrapToggleAsset::class, $class);
            }),
        ], $this));
        $widget->run();
    }

    /**
     * @test
     * @throws Exception
     */
    public function javascriptRegistered()
    {
        $widget = new BootstrapToggleWidget(['name' => 'input']);
        $widget->setView(Stub::makeEmpty(View::class, [
            'registerJs' => Stub\Expected::once(),
        ], $this));
        $widget->run();
    }

    /**
     * @test
     * @throws Exception
     */
    public function renderWithContainer()
    {
        $widget = new BootstrapToggleWidget(['name' => 'input']);
        $widget->setView(Stub::makeEmpty(View::class));
        $output = $widget->run();
        $this->assertStringStartsWith('<div><input', $output);
    }

    /**
     * @test
     * @throws Exception
     */
    public function renderWithoutContainer()
    {
        $widget = new BootstrapToggleWidget(['name' => 'input', 'container' => false]);
        $widget->setView(Stub::makeEmpty(View::class));
        $output = $widget->run();
        $this->assertStringStartsWith('<input', $output);
    }

    /**
     * @test
     * @throws Exception
     */
    public function renderWithModel()
    {
        $model = new DynamicModel(['a' => 'b']);
        $widget = new BootstrapToggleWidget(['name' => 'input', 'model' => $model, 'attribute' => 'a']);
        $widget->setView(Stub::makeEmpty(View::class));
        $output = $widget->run();
        $this->assertContains('name="DynamicModel[a]"', $output);
    }
}
