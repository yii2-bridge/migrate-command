<?php

namespace Bridge\Migrate\Modules;

use yii\base\Module as BaseModule;

/**
 * Class Module
 * @package Bridge\Migrate\Modules
 */
class Module extends BaseModule
{
    /**
     * @var string $controllerNamespace
     */
    public $controllerNamespace = 'Bridge\Migrate\Controllers';
}