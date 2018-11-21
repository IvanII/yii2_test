<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\LessonSearch;

/**
 * Class LessonController
 * @package app\controllers
 */
class LessonController extends Controller
{
    /**
     * Return Lesson list with Group and Teacher
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new LessonSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->get());

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,         
        ]);
    }
}
