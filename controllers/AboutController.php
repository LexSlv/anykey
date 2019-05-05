<?php

namespace app\controllers;
use app\models\TextBlock;
use app\models\Team;
use app\models\Meta;
use yii;
class AboutController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $meta = Meta::find()->where(['alias'=>'about'])->one();
        Yii::$app->view->params['title'] = $meta['title'];
        Yii::$app->view->params['description'] = $meta['description'];
        Yii::$app->view->params['keywords'] = $meta['key_words'];

        $about_text = TextBlock::find()->where(['alias'=>'about_text'])->one();
        $team = Team::find()->orderBy("show_position ASC")->all();

        return $this->render('index', compact('about_text','team'));
    }

}
