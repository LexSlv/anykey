<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\WorksImgs */

$this->title = 'Update Works Imgs: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Works Imgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="works-imgs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
