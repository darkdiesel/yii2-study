<?php

namespace app\controllers;

use Yii;

class TestController extends AppController
{
    // change layout for this controller
    public $layout = 'basic';

    public function actionIndex()
    {
        // check if Ajax request
        if (Yii::$app->request->isAjax) {
            $response = [
                'success' => TRUE
            ];
            return $this->asJson($response);
        }

        // set title for view in controller
        $this->view->title = "Page title";

        return $this->render('index');
    }
}