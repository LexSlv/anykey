<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WorksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Works';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="works-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Works', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'image',
                'format' => 'html',
                'label' => 'img',
                'value' => function ($data) {
                    return '<img src="'.$data['image'].'" style="width:150px;">';
                },
            ],
            'alias',
            'title',
            'is_active',
            //'key_words:ntext',
            //'team:ntext',
            //'videos:ntext',
            //'images:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
