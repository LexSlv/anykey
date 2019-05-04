<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StartPage */

$this->title = 'Create Start Page';
$this->params['breadcrumbs'][] = ['label' => 'Start Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="start-page-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
