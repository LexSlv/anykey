<?php

namespace app\controllers;
use app\models\TextBlock;
use app\models\Locations;
use app\models\Meta;
use yii;


class LocationsController extends \yii\web\Controller
{
    public function actionIndex()
    {

        $meta = Meta::find()->where(['alias'=>'locations'])->one();
        Yii::$app->view->params['title'] = $meta['title'];
        Yii::$app->view->params['description'] = $meta['description'];
        Yii::$app->view->params['keywords'] = $meta['key_words'];

        $locations = Locations::find()->orderBy('position ASC')->all();
        $loc_top_img = TextBlock::find()->where(['alias'=>'loc_top_img'])->one();
        $loc_top_text = TextBlock::find()->where(['alias'=>'loc_top_text'])->one();
        return $this->render('index', compact('locations', 'loc_top_img', 'loc_top_text'));
    }

}
