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
