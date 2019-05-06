<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Works */
/* @var $form yii\widgets\ActiveForm */
?>

<style>
    .plus {
        padding: 10px;
        border-radius: 50px;
        font-weight: 600;
        border:1px solid grey;
        background-color: white;
    }
    td {
        padding: 5px;
    }
</style>

<div class="works-form">

    <?php $form = ActiveForm::begin(); ?>

    <ul class="nav nav-tabs">
        <li class="active" id="tab_but1"><a href="#">Main</a></li>
        <li  id="tab_but2"><a href="#">Meta</a></li>
        <li  id="tab_but3"><a href="#">Team</a></li>
        <li  id="tab_but4"><a href="#">Videos</a></li>
        <li  id="tab_but5"><a href="#">Images gallery</a></li>
    </ul>
    <br>

    <div class = "tab" id="tab1">
    <?= DatePicker::widget([
        'model' => $model,
        'attribute' => 'date_create',
        'template' => '{addon}{input}',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-m-d'
        ]
    ]);?>
    <br>
    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'alias')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'is_active')->checkbox() ?>

    </div>


    <div class = "tab" id="tab2">
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'key_words')->textarea(['rows' => 6]) ?>
    </div>

    <?php
    if(isset($model->team)){
        $team = json_decode($model->team, true);
    }

    if(isset($model->videos)){
        $videos = json_decode($model->videos, true);
    }

    if(isset($model->images)){
        $images = json_decode($model->images, true);
    }
    ?>


    <div class = "tab" id="tab3">
    <?php //echo $form->field($model, 'team')->textInput() ?>
        <table style="background-color: #ECF0F5;">
            <tr>
                <td><b>Name</b></td>
                <td><b>Position</b></td>
            </tr>
            <?php for($i=0; $i<20; $i++): ?>
            <?php
                if(isset($team) AND isset($team[$i]['name']) AND isset($team[$i]['position'])){
                    $name = $team[$i]['name'];
                    $position = $team[$i]['position'];
                }else{
                    $name = "";
                    $position = "";
                }
            ?>
        <tr>
            <td><input type="text" id="works-team" class="form-control" name="Works[team][<?= $i ?>][name]" value="<?= $name ?>" aria-required="true"></td>
            <td><input type="text" id="works-team" class="form-control" name="Works[team][<?= $i ?>][position]" value="<?= $position ?>" aria-required="true"></td>
        </tr>
            <?php endfor; ?>
        </table>

    </div>

    <div class = "tab" id="tab4">
        <?php //echo $form->field($model, 'videos')->textarea(['rows' => 6]) ?>
        <table style="background-color: #ECF0F5;">
            <tr>
                <td><b>title</b></td>
                <td><b>video_link</b></td>
                <td><b>Show after text block</b></td>
            </tr>
            <?php for($i=0; $i<20; $i++): ?>
                <?php
                if(isset($videos) AND isset($videos[$i]['title']) AND isset($videos[$i]['video_link'])){
                    $title = $videos[$i]['title'];
                    $video_link = $videos[$i]['video_link'];
                    $checked = "";
                    if(isset($videos[$i]['after_text_block']) AND $videos[$i]['after_text_block'] == 1){
                        $checked = "checked";
                    }
                }else{
                    $title = "";
                    $video_link = "";
                    $checked = "";
                }
                ?>
                <tr>
                    <td><input type="text" id="works-team" class="form-control" name="Works[videos][<?= $i ?>][title]" value="<?= $title ?>" aria-required="true"></td>
                    <td><input type="text" id="works-team" class="form-control" name="Works[videos][<?= $i ?>][video_link]" value="<?= $video_link ?>" aria-required="true"></td>
                    <td><input type="checkbox" name="Works[videos][<?= $i ?>][after_text_block]" value="1" <?= $checked ?>></td>
                </tr>
            <?php endfor; ?>
        </table>
    </div>

    <div class = "tab" id="tab5">
        <?php //echo $form->field($model, 'images')->textarea(['rows' => 6]) ?>
        <table style="background-color: #ECF0F5;">
            <tr>
                <td><b>image</b></td>
            </tr>
            <?php for($i=0; $i<20; $i++): ?>
            <?php
                if(isset($images) AND isset($images[$i])){
                    $image = $images[$i];
                }else{
                    $image = "";
                }
            ?>
                <tr>
                    <td><input type="text" id="works-team" class="form-control" name="Works[images][<?= $i ?>]" value="<?= $image ?>" aria-required="true"></td>
                </tr>
            <?php endfor; ?>
        </table>
    </div>

    <hr>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


<script>
$("#tab2").hide();
$("#tab3").hide();
$("#tab4").hide();
$("#tab5").hide();


$("#tab_but1").on('click', function () {
    $(".tab").hide();
    $("#tab1").show();
    $("li").removeClass("active");
    $(this).addClass("active");
})

$("#tab_but2").on('click', function () {
    $(".tab").hide();
    $("#tab2").show();
    $("li").removeClass("active");
    $(this).addClass("active");
})

$("#tab_but3").on('click', function () {
    $(".tab").hide();
    $("#tab3").show();
    $("li").removeClass("active");
    $(this).addClass("active");
})

$("#tab_but4").on('click', function () {
    $(".tab").hide();
    $("#tab4").show();
    $("li").removeClass("active");
    $(this).addClass("active");
})


$("#tab_but5").on('click', function () {
    $(".tab").hide();
    $("#tab5").show();
    $("li").removeClass("active");
    $(this).addClass("active");
})

</script>