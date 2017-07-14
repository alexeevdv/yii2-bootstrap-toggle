yii2-bootstrap-toggle
===========

[![Build Status](https://travis-ci.org/alexeevdv/yii2-bootstrap-toggle.svg?branch=master)](https://travis-ci.org/alexeevdv/yii2-bootstrap-toggle)

Yii2 extension to render bootstrap toggle widget instead of checkbox.

[http://www.bootstraptoggle.com/](http://www.bootstraptoggle.com/)


## Installation

The preferred way to install this extension is through [composer](https://getcomposer.org/download/).

Either run

```
$ php composer.phar require alexeevdv/yii2-bootstrap-toggle ^1.0
```

or add

```
"alexeevdv/yii2-bootstrap-toggle": "^1.0"
```

to the ```require``` section of your `composer.json` file.

## Usage

### In active form
```php
use alexeevdv\bootstrap\BootstrapToggleWidget;

//...
echo $form->field($model, 'attribute')->widget(BootstrapToggleWidget::className());
//...
```

### Standalone widget

```php
use alexeevdv\bootstrap\BootstrapToggleWidget;

//...
BootstrapToggleWidget::widget([
    'name' => 'is_enabled',
    'value' => false,
]);
//...
```

## Options

```php
BootstrapToggleWidget::widget([

    /**
     * Wrapper tag name. If set to false no tag will be rendered
     */
    'container' => 'div',

    /**
     * Wrapper HTML attributes
     */
    'containerOptions' => [],
    
    /**
     * Label when checkbox is checked
     */
    'labelEnabled' => 'Yes',
    
    /**
     * Label when checkbox is not checked
     */
     'labelDisabled' => 'No',
     
     /**
      * Additional javascript options to Bootstrap Toggle plugin 
      */
      'pluginOptions' => [],
]);
```
