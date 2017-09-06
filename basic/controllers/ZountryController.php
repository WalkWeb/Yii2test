<?php

namespace app\controllers;

use Yii;
use app\models\Zountry;
use app\models\ZountrySearch;
use app\models\UploadForm;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\randomNameGenerator;

/**
 * ZountryController implements the CRUD actions for Zountry model.
 */
class ZountryController extends Controller
{
    /**
     * Разрешенные типы запросов
     *
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Страница /zountry - показывает список элементов таблицы Zountry
     *
     * Вид - /view/zountry/index.php
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ZountrySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', compact('searchModel', 'dataProvider'));
    }

    /**
     * Страница отдельной записи в таблице Zountry.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Страница добавления новой записи в таблицу Zountry.
     * При успешном создании редиректит на станицу отображения новой записи
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Zountry();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Обновляет запись в таблице Zountry по id
     * При успешном редактировании редиректит на станицу отображения новой записи
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $image = UploadedFile::getInstance($model, 'imageFile');
            $imgname = 'eosago_logo_'.randomNameGenerator::getRandomName().'.'.$image->extension;
            $image->saveAs('uploads/'.$imgname);
            $model->imageFile = $imgname;
            $model->save();

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Удаление записи в таблице Zountry.
     * После удаления редиректит на главную страницу с отображением общего списка записей
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionUpload()
    {
        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($model->upload()) {



                echo '<p>Файл успешно загружен.</p>';

                echo '<pre>';
                var_dump($model->imageFile);
                echo '</pre>';


                die;

                return;
            }
        }

        return $this->render('upload', ['model' => $model]);
    }








    /**
     * Находит запись в таблице Zountry по id и возвращает объект модели
     * В противном случае возвращает ошибку
     * @param integer $id
     * @return Zountry the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Zountry::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
