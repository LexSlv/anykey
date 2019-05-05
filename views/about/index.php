<div class="bodyBlock">

    <h1>About</h1>

    <div class="bodyText"><?= $about_text['text'] ?></div>

    <div class="teamBlock">
        <?php foreach ($team as $t): ?>
        <div class="teamBox">
            <h3><?= $t['person_name'] ?></h3>
            <span><?= $t['position'] ?></span>
            <span><?= $t['email'] ?></span>
        </div>
        <?php endforeach; ?>

    </div>
