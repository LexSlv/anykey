<?php

namespace app\controllers;
use app\models\Meta;
use app\models\Works;
use yii;
class WorksController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $meta = Meta::find()->where(['alias'=>'works'])->one();
        Yii::$app->view->params['title'] = $meta['title'];
        Yii::$app->view->params['description'] = $meta['description'];
        Yii::$app->view->params['keywords'] = $meta['key_words'];

        $works = Works::find()->orderBy('date_create DESC')->where(['is_active'=>'1'])->all();

        return $this->render('index', compact('works'));
    }

}
