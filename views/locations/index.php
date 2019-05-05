<div class="imageBox">
    <div class="mainPic" style="background-image: url(<?= $loc_top_img['text'] ?>)">
        <h1>Locations</h1>
        <h2><?= $loc_top_text['text'] ?></h2>
    </div>
    <?php foreach ($locations as $location): ?>
    <div class="boxPic">
        <div class="big" style="background-image: url(<?= $location['big_image'] ?>)">
            <h1><?= $location['title'] ?></h1>
        </div>
        <div class="small" style="background-image: url(<?= $location['small_image1'] ?>)"></div>
        <div class="small" style="background-image: url(<?= $location['small_image2'] ?>"></div>
        <div class="small" style="background-image: url(<?= $location['small_image3'] ?>)"></div>
    </div>
    <?php endforeach; ?>
</div>