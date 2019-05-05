<?php

namespace app\controllers;

use app\models\TextBlock;
use app\models\Meta;
use yii;

class ServicesController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $meta = Meta::find()->where(['alias' => 'services'])->one();
        Yii::$app->view->params['title'] = $meta['title'];
        Yii::$app->view->params['description'] = $meta['description'];
        Yii::$app->view->params['keywords'] = $meta['key_words'];

        $serv_top_text = TextBlock::find()->where(['alias' => 'serv_top_text'])->one();
        $serv_top_img = TextBlock::find()->where(['alias' => 'serv_top_img'])->one();
        $serv_mid_text1 = TextBlock::find()->where(['alias' => 'serv_mid_text1'])->one();
        $serv_mid_img = TextBlock::find()->where(['alias' => 'serv_mid_img'])->one();
        $serv_mid_text2 = TextBlock::find()->where(['alias' => 'serv_mid_text2'])->one();
        $serv_img_grid = TextBlock::find()->where(['alias' => 'serv_img_grid'])->one();


        return $this->render('index', compact('serv_top_text', 'serv_top_img', 'serv_mid_text1', 'serv_mid_img', 'serv_mid_text2', 'serv_img_grid'));
    }

}
