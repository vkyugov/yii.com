<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 9/4/19
 * Time: 9:39 AM
 */

namespace app\controllers;

use app\models\Category;
use Yii;
use app\models\TestForm;

class TestController extends AppController
{

    public function actionTest(){

        $this->view->title = 'testPage';

       /* if(Yii::$app->request->isAjax){
            debug($_POST);
            return 'test yes';
        }*/

        $names = ['Ivanov', 'Petrov', 'Sidorov'];
        $model = new TestForm;
        if ( $model->load(Yii::$app->request->post())){
            if($model->validate()){
                Yii::$app->session->setFlash('success', 'Data is received');
            }
            else{
                Yii::$app->session->setFlash('error', 'Data not received');
            }
        }


        $cats = Category::find()->all();


        return $this->render('test', compact('names', 'model', 'cats'));


    }


}