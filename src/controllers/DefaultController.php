<?php

namespace Bridge\Migrate\Controllers;

use yii\console\Controller;
use Yii;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $result = shell_exec(Yii::getAlias('@app') . '/vendor/bin/bridge-install');
        echo $result;
    }
}