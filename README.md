yii2-bootstrap-toggle
===========

[![Build Status](https://travis-ci.org/alexeevdv/yii2-bootstrap-toggle.svg?branch=master)](https://travis-ci.org/alexeevdv/yii2-bootstrap-toggle)
[![codecov](https://codecov.io/gh/alexeevdv/yii2-bootstrap-toggle/branch/master/graph/badge.svg)](https://codecov.io/gh/alexeevdv/yii2-bootstrap-toggle)
![PHP 5.6](https://img.shields.io/badge/PHP-5.6-green.svg) 
![PHP 7.0](https://img.shields.io/badge/PHP-7.0-green.svg)
![PHP 7.1](https://img.shields.io/badge/PHP-7.1-green.svg) 
![PHP 7.2](https://img.shields.io/badge/PHP-7.2-green.svg)

Yii2 extension to render [bootstrap toggle](http://www.bootstraptoggle.com/) widget instead of checkbox.

![Screenshot](screenshot.jpg)

## Installation

The preferred way to install this extension is through [composer](https://getcomposer.org/download/).

Either run

```
$ php composer.phar require alexeevdv/yii2-bootstrap-toggle "~1.0"
```

or add

```
"alexeevdv/yii2-bootstrap-toggle": "~1.0"
```

to the ```require``` section of your `composer.json` file.

## Usage

### In active form
```php
use alexeevdv\bootstrap\BootstrapToggleWidget;

//...
echo $form->field($model, 'attribute')->widget(BootstrapToggleWidget::class);
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
