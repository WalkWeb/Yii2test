<?php

namespace app\controllers;

use Yii;
use app\models\Testgii;

class TestgiiController extends \yii\web\Controller
{
    public function actionIndex()
    {
//        var_dump($this->title);
//        die;


        $model = new Testgii();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //Yii::$app->session->setFlash('contactFormSubmitted');

            echo '<p>Сохранение успешно</p>';
            die;
            //return $this->refresh();
        }

        return $this->render('index', [
            'model' => $model
        ]);
    }

}
