<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Test;

class TestController extends Controller
{
    public function actionIndex()
    {


        $query = Test::find();


        $tests = $query->orderBy('name')
            ->all();

        return $this->render('index', [
            'tests' => $tests,
        ]);
    }


    public function actionEdit($id)
    {





        return var_dump($id);


    }

}






































