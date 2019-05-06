<div class="projectBody">
    <?php
        $videos = json_decode($project->videos);
        $team = json_decode($project->team);
        $images = json_decode($project->images);

        foreach ($team as $k=>$team_member){
            if($team_member->position!="" AND $team_member->name){
                $team_arr[$k]['name'] = $team_member->name;
                $team_arr[$k]['position'] = $team_member->position;
            }
        }

        $col_count1 = count($team_arr)/3;
        $col_count2 = $col_count1;
        $col_count3 = count($team_arr) - $col_count2;
    ?>

    <?php foreach ($videos as $video):?>
    <?php  if($video->title!="" AND !isset($video->after_text_block)): ?>
    <?php if($video->title!=""): ?>
    <h1><?= $video->title ?></h1>
    <?php endif; ?>
    <div class="projectVideo">
        <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="<?= $video->video_link ?>" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
    </div>
    <?php endif; ?>
    <?php endforeach; ?>

    <div class="projectTeam">
        <div>
            <?php for($i=0; $i<$col_count1; $i++): ?>
            <p class="position"><?= $team_arr[$i]['position'] ?></p>
            <p class="name"><?= $team_arr[$i]['name'] ?></p>
            <?php endfor; ?>
        </div>

        <div>
            <?php for($i=$col_count1; $i<($col_count1 + $col_count2); $i++): ?>
                <p class="position"><?= $team_arr[$i]['position'] ?></p>
                <p class="name"><?= $team_arr[$i]['name'] ?></p>
            <?php endfor; ?>
        </div>

        <div>
            <?php for($i=($col_count1 + $col_count2); $i<($col_count1 + $col_count2 + $col_count3); $i++): ?>
                <p class="position"><?= $team_arr[$i]['position'] ?></p>
                <p class="name"><?= $team_arr[$i]['name'] ?></p>
            <?php endfor; ?>
        </div>

    </div>

    <?php foreach ($videos as $video):?>
        <?php  if($video->video_link!="" AND $video->after_text_block==1): ?>
            <?php if($video->title!=""): ?>
            <h1><?= $video->title ?></h1>
            <?php endif; ?>
            <div class="projectVideo">
                <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="<?= $video->video_link ?>" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>


    <h1>images</h1>
    <div style="display: inline-block">
    <?php foreach ($images as $image): ?>
        <img src="<?= $image ?>" alt="" style="width: 100px;">
    <?php endforeach; ?>
    </div>
</div>

