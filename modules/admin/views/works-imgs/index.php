<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WorksImgsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Works Imgs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="works-imgs-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Works Imgs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'img',
                'format' => 'html',
                'label' => 'img',
                'value' => function ($data) {
                    return '<img src="/web/uploads/works/'.$data['img'].'" style="width:150px;">';
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
