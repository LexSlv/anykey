<?php

namespace app\controllers;
use app\models\Works;
use yii;

class ProjectController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $alias = $_GET['alias'];
        if($alias == "")die;

        $project = Works::find()->where(['alias'=>$alias])->one();


        Yii::$app->view->params['title'] = $project['title'];
        Yii::$app->view->params['description'] = $project['description'];
        Yii::$app->view->params['keywords'] = $project['key_words'];

        return $this->render('index', compact('project'));
    }

}
