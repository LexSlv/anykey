<div class="projectBlock">
    <h1><?= $model['title'] ?></h1>
    <div class="videoBlock">
        <div class="videoBox">
            <iframe class="vimeo-frame" src="<?= $model['video'] ?>" width="100%" height="240" frameborder="0" webkitallowfullscreen   mozallowfullscreen allowfullscreen></iframe>
        </div>
        <a href="<?= $model['go_away_link'] ?>""><span class="videoTitle">full project</span></a>
    </div>
    <span class="videoDate"><?= date("m/Y", strtotime($model['date_create'])) ?></span>
</div>


