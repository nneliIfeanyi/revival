<?php require APPROOT . '/views/inc/header.php'; ?>
<section class="row">
    <div class="col-12">
        <div style="height: 200px;position:relative;">
            <img src="<?= URLROOT; ?>/img/av2.PNG" class="w-100" height="200" alt="revival image">
            <h2 class="m-0 lead rounded-2 fw-bold"
                style="position: absolute;
                        top: 100px;
                        text-align:center;
                        background:rgba(0, 0, 0, 0.2);
                        padding:8px;
                        color:antiquewhite;">
                Now Playing | <?= $data['sermon']->title; ?> | <?= $data['sermon']->preacher; ?>
            </h2>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="animate-box">
            <div class="card">
                <div class="card-body">
                    <?php
                    $v_id = explode('=', $data['sermon']->link);
                    ?>
                    <iframe id="existing-iframe-example"
                        type="text/html"
                        width="100%" height="270"
                        src="https://www.youtube.com/embed/<?= $v_id[1]; ?>?enablejsapi=1&origin=<?= URLROOT; ?>&rel=0"
                        frameborder="0"
                        style="border: solid 1px #37474F">
                    </iframe>
                    <div class="card-text">
                        <p class="lead p-3"><?= $data['sermon']->title; ?><br>
                            <span style="font-size: medium;">Message spoken by <?= $data['sermon']->preacher; ?> at
                                <?= $data['sermon']->details; ?></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="d-flex p-3">
                <a href="<?= URLROOT; ?>/pages/resources" class="btn">All Sermons </a>
            </div>
        </div>
    </div>
    <div class="col-lg-7">
        <h2 class="m-0 text-center p-3 text-secondary shadow-sm lead fw-semibold heading">More On This Category | <span class="text-muted" style="font-size: small;"><?= $data['sermon']->category; ?></span></h2>
        <div class="row mt-3">
            <?php foreach ($data['recent'] as $uploads): ?>
                <div class="col-md-4 text-center animate-box">
                    <div class="sermon-entry">
                        <div class="sermon" style="background-image: url(<?= URLROOT . '/' . $uploads->thumbnail; ?>);">
                            <div class="play">
                                <a class="" href="<?= URLROOT; ?>/pages/preview/<?= $uploads->id; ?>"><i class="icon-play3"></i></a>
                            </div>
                        </div>
                        <h3><?= $uploads->title; ?></h3>
                        <span><?= $uploads->preacher; ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php require APPROOT . '/views/inc/footer.php'; ?>
<script type="text/javascript">
    var tag = document.createElement('script');
    tag.id = 'iframe-demo';
    tag.src = 'https://www.youtube.com/iframe_api';
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    var player;

    function onYouTubeIframeAPIReady() {
        player = new YT.Player('existing-iframe-example', {
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });
    }

    function onPlayerReady(event) {
        document.getElementById('existing-iframe-example').style.borderColor = '#FF6D00';
    }

    function changeBorderColor(playerStatus) {
        var color;
        if (playerStatus == -1) {
            color = "#37474F"; // unstarted = gray
        } else if (playerStatus == 0) {
            color = "#FFFF00"; // ended = yellow
        } else if (playerStatus == 1) {
            color = "#33691E"; // playing = green
        } else if (playerStatus == 2) {
            color = "#DD2C00"; // paused = red
        } else if (playerStatus == 3) {
            color = "#AA00FF"; // buffering = purple
        } else if (playerStatus == 5) {
            color = "#FF6DOO"; // video cued = orange
        }
        if (color) {
            document.getElementById('existing-iframe-example').style.borderColor = color;
        }
    }

    function onPlayerStateChange(event) {
        changeBorderColor(event.data);
    }
</script>