<?php

namespace app\controllers;

use app\models\TextBlock;
use app\models\Meta;
use yii;

class ContactsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $meta = Meta::find()->where(['alias'=>'contacts'])->one();
        Yii::$app->view->params['title'] = $meta['title'];
        Yii::$app->view->params['description'] = $meta['description'];
        Yii::$app->view->params['keywords'] = $meta['key_words'];


        $adress = TextBlock::find()->where(['alias'=>'adress'])->one();
        $phones = TextBlock::find()->where(['alias'=>'phones'])->one();
        $email = TextBlock::find()->where(['alias'=>'email'])->one();

        //print_r($email); die;
        return $this->render('index',compact('adress','phones', 'email'));
    }

}
