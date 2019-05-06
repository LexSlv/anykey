<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\Menu;

$menu = Menu::find()->orderBy("position ASC")->all();

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->params['title']) ?></title>
    <meta name="description" content="<?= Html::encode($this->params['description']) ?>"/>
    <meta name="keywords" content="<?= Html::encode($this->params['keywords']) ?>"/>
    <?php $this->registerLinkTag([
        'rel' => 'stylesheet',
        'href' => '/css/main.css',
    ]); ?>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!-- <li class="active">works</li> -->
<div class="menuBlock">
    <ul>
        <?php foreach ($menu as $menu_item): ?>
            <li><a href="<?= $menu_item['url'] ?>"><?= $menu_item['link_text'] ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>


<div class="container">
    <?php if (isset($this->params['background']) || $this->params['background'] != ""){ ?>
    <div class="mainPage" style="background-image: url(<?= $this->params['background'] ?>)">
        <?php }else{ ?>
        <div class="mainPage">
            <?php } ?>
            <div class="headerBlock">
                <div class="logo">anykey</div>
                <div class="search">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 626.52 626.52"
                         style="enable-background:new 0 0 626.52 626.52;" xml:space="preserve" class=""><g>
                            <g>
                                <path d="M611.531,581.494L470.974,440.937c41.573-46.902,67.614-107.85,67.614-175.292C538.566,119.155,419.389,0,272.899,0   C126.431,0,7.254,119.155,7.254,265.645c0,146.447,119.177,265.602,265.645,265.602c60.042,0,114.819-20.755,159.37-54.432   l141.938,141.98c5.178,5.156,11.908,7.724,18.661,7.724s13.506-2.567,18.662-7.724   C621.843,608.505,621.843,591.807,611.531,581.494z M60.025,265.645c0-117.364,95.51-212.896,212.896-212.896   c117.408,0,212.896,95.509,212.896,212.896s-95.488,212.832-212.896,212.832C155.535,478.477,60.025,383.031,60.025,265.645z"
                                      data-original="#000000" class="active-path" data-old_color="#000000"
                                      fill="#FFFFFF"/>
                            </g>
                        </g>
					</svg>
                </div>
            </div>


            <?= $content ?>



            <?php if(!$this->params['hide_footer']): ?>
            <div class="footerBlock">
                <div class="footerIcons">

                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 430.118 430.118"
                         style="enable-background:new 0 0 430.118 430.118;" xml:space="preserve" class=""><g>
                            <g>
                                <path id="Vimeo"
                                      d="M367.243,28.754c-59.795-1.951-100.259,31.591-121.447,100.664c10.912-4.494,21.516-6.762,31.858-6.762   c21.804,0,31.455,12.237,28.879,36.776c-1.278,14.86-10.911,36.482-28.879,64.858c-18.039,28.423-31.513,42.61-40.464,42.61   c-11.621,0-22.199-21.958-31.857-65.82c-3.239-12.918-9.031-45.812-17.324-98.765c-7.775-49.046-28.32-71.962-61.727-68.741   C112.15,34.873,90.98,47.815,62.726,72.308C42.113,91.032,21.228,109.761,0,128.471l20.225,26.112   c19.303-13.562,30.595-20.311,33.731-20.311c14.802,0,28.625,23.219,41.488,69.651c11.53,42.644,23.158,85.23,34.744,127.812   c17.256,46.466,38.529,69.708,63.552,69.708c40.473,0,90.028-38.065,148.469-114.223c56.537-72.909,85.725-130.352,87.694-172.341   C432.498,58.764,411.613,30.028,367.243,28.754z"
                                      data-original="#000000" class="active-path" data-old_color="#000000"
                                      fill="#FFFFFF"/>
                            </g>
                        </g>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                         xml:space="preserve" width="512px" height="512px" class=""><g>
                            <g>
                                <g>
                                    <path d="M288,176v-64c0-17.664,14.336-32,32-32h32V0h-64c-53.024,0-96,42.976-96,96v80h-64v80h64v256h96V256h64l32-80H288z"
                                          data-original="#000000" class="active-path" data-old_color="#000000"
                                          fill="#FFFFFF"/>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         id="Layer_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 169.063 169.063"
                         style="enable-background:new 0 0 169.063 169.063;" xml:space="preserve" class=""><g>
                            <g>
                                <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752   c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407   c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752   c17.455,0,31.656,14.201,31.656,31.655V122.407z"
                                      data-original="#000000" class="active-path" data-old_color="#000000"
                                      fill="#FFFFFF"/>
                                <path d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561   C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561   c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z"
                                      data-original="#000000" class="active-path" data-old_color="#000000"
                                      fill="#FFFFFF"/>
                                <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78   c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78   C135.661,29.421,132.821,28.251,129.921,28.251z"
                                      data-original="#000000" class="active-path" data-old_color="#000000"
                                      fill="#FFFFFF"/>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="footerText">All Rights Reserved.</div>
            </div>
            <?php endif; ?>


        </div>
    </div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
