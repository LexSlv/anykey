<div class="worksBody">

    <h1>works</h1>

    <div class="worksBox">
        <?php foreach ($works AS $work): ?>
        <div class="workBlock" style="background-image: url(<?= $work['image'] ?>)">
            <h3><?= $work['title'] ?></h3>
            <div>
                <a href="">Quick Play</a>
                <a href="">Full project</a>
            </div>
        </div>
        <?php endforeach; ?>

    </div>