<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Ajax;
use yii\db\Query;

class AjaxController extends Controller
{
    public function actionTest()
    {

        $query = Ajax::find();

        $country = $query
            ->from('country')
            ->select(['name', 'population'])
            ->where(['code' => 'AU'])
            ->one();


        /*
        $country = (new Query())
            ->from('country')
            ->select(['name', 'population'])
            ->where(['code' => 'AU'])
            ->one();
        */
        return $this->render('/site/ajax', [
            'country' => $country
        ]);




    }





}








