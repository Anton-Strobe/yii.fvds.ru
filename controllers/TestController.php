<?php

namespace app\controllers;

use yii\web\Controller;

class TestController extends Controller
{
    public function actionMyTest()
    {
        echo 'hello world';
    }
public function actionIndex()
{
return 'Hello World!!!';
}


}