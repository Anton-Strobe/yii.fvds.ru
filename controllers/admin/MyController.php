<?php

namespace app\controllers;

use yii\web\Controller;

class TestController extends Controller
{
   public $defaultActinon = 'test';

    public function actionIndex()
    {
        return '<h1>Test Index</h1>';
    }

    public function actionMyTest()
    {
        return __method__;
    }
 
}

