<?php

namespace Bridge\Migrate\Controllers;

use yii\console\Controller;
use yii\helpers\Console;
use Yii;

/**
 * DefaultController
 * @package Bridge\Migrate\Controllers
 */
class DefaultController extends Controller
{
    /**
     * This action runs the migration commands for the `yii2-bridge/core` package.
     *
     * @link https://github.com/yii2-bridge/core
     * @return void
     */
    public function actionIndex()
    {
        $result = shell_exec(Yii::getAlias('@app') . '/vendor/bin/bridge-install');

        $this->stdout($result . "\n", Console::FG_GREEN);
    }
}