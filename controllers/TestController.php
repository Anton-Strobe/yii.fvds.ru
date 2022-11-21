<?php

namespace app\controllers;

use yii\web\Controller;

class TestController extends Controller
{

    public function actions()
    {
    return [
        'test' => 'app\components\HelloAction',
    ]; 
    }

    public function actionMyTest()
    {
        echo 'hello world';
    }
public function actionIndex($name)
{
    var_dump($name);
return 'Hello World!!!';
}





}