<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 9/3/19
 * Time: 6:18 PM
 */

namespace app\controllers;




class MyController extends AppController
{
    public function actionIndex()
    {
        $hi = 'Hello World';
        return $this->render('index', ['hi' => $hi]);
    }
}