<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use navatech\roxymce\assets\BootstrapTreeviewAsset;
use navatech\roxymce\assets\FancyBoxAsset;
use navatech\roxymce\assets\FontAwesomeAsset;
use navatech\roxymce\assets\LazyLoadAsset;
use yii\helpers\Url;

FontAwesomeAsset::register($this);
LazyLoadAsset::register($this);
FancyBoxAsset::register($this);
BootstrapTreeviewAsset::register($this);

//Редактор текста
echo \navatech\roxymce\widgets\RoxyMceWidget::widget([
    'name' => 'Post[content]'
]);

?>

<hr>

<input type="text" id="fieldID2"><a class="btn btn-primary" data-toggle="modal" href="" data-target="#modal-id" data-remote="false">Trigger modal</a>


<div class="modal modal-roxy fade" id="modal-id">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <iframe src="<?= Url::to([
                            '/roxymce/default',
                            'type'   => 'image',
                            'input'  => 'fieldID2',
                            'dialog' => 'modal',
                        ]) ?>" height="470px" width="100%"></iframe>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

