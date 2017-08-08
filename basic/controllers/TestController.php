<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Test;
use yii\web\NotFoundHttpException;

class TestController extends Controller
{
    public function actionIndex()
    {

        // Если есть POST - обрабатываем данные
        if ($_POST) {

            // Если тип запроса 2 - значит это обновление существующих данных
            if ($_POST['Test']['type'] == 2) {

                $id = $_POST['Test']['id'];

                $model = $this->findModel($id);


                if($model->load(Yii::$app->request->post()) && $model->save()) {

                    Yii::$app->session->setFlash('FormSubmitted');
                }

            // Если тип запроса 1 - значит это добавление новой записи
            } elseif ($_POST['Test']['type'] == 1) {

                $model = new Test();
                if($model->load(Yii::$app->request->post()) && $model->save()) {

                    Yii::$app->session->setFlash('FormSubmitted');

                }

            // Иначе пришли неверные данные
            } else {

                echo 'Отправлен неизвестный тип запроса';
                die;

            }
        }

        $query = Test::find();

        $tests = $query
            ->orderBy('name')
            ->all();

        return $this->render('index', [
            'tests' => $tests,
        ]);
    }

    public function actionEdit($id)
    {

        $model = $this->findModel($id);

        if($model->load(Yii::$app->request->post()) && $model->save()) {

            Yii::$app->session->setFlash('FormSubmitted');
            return $this->refresh();
        }

        return $this->render('edit', [
            'test' => $model,
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Test::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
