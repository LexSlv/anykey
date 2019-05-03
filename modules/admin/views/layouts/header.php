<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

use navatech\roxymce\assets\BootstrapTreeviewAsset;
use navatech\roxymce\assets\FancyBoxAsset;
use navatech\roxymce\assets\FontAwesomeAsset;
use navatech\roxymce\assets\LazyLoadAsset;
use yii\helpers\Url;

FontAwesomeAsset::register($this);
LazyLoadAsset::register($this);
FancyBoxAsset::register($this);
BootstrapTreeviewAsset::register($this);

?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">AP</span><span class="logo-lg">' . "Admin Panel" . '</span>', "/admin/", ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">


                <li>
                    <div style="width: 400px; display: inline-block; margin-top: 7px;">
                        <input type="text" class="form form-control" style="width: 250px; display: inline-block; border-radius: 3px;"  id="fieldID2">
                        <a class="btn btn-warning" style="display: inline-block; margin-top: -2px;" data-toggle="modal" href="" data-target="#modal-id" data-remote="false"> Files manager</a>
                    </div>

                </li>


                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        <span class="glyphicon glyphicon-log-out"></span>
                    </a>
                    <ul class="dropdown-menu" style="width: 10px;">


                        <!-- Menu Footer-->
                        <li class="user-footer" >
                            <div class="pull-right">
                                <?= Html::a(
                                    'Sign out',
                                    ['/site/logout'],
                                    ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                ) ?>
                            </div>
                        </li>
                    </ul>
                </li>


            </ul>
        </div>
    </nav>
</header>

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
