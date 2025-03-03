<?php require APPROOT . '/views/inc/header.php'; ?>
<section class="hero-section">
  <div class="flexslider px-0">
    <ul class="slides list-unstyled mt-4">
      <li style="background-image: url(<?= URLROOT; ?>/img/cross3.PNG);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
              <div class="slider-text">
                <div class="slider-text-inner">
                  <h1 class="h2 fw-light pt-2"><?= $data['core']->h1; ?><br /> <?= $data['core']->h1b; ?></h1>
                  <h2 style="color: antiquewhite;" class="fst-italic fw-lighter"><?= $data['core']->para; ?></h2>
                  <p><a class="btn btn-primary" href="<?= URLROOT; ?>/portal/registered/rlcode"> RL-code</a> </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li style="background-image: url(<?= URLROOT; ?>/img/cross3.PNG);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
              <div class="slider-text">
                <div class="slider-text-inner">
                  <h1 class="h2 fw-light pt-2">Ogbuoma mission outreach<br /> Harvesting Egbuoma for Christ</h1>
                  <h2 style="color: antiquewhite;" class="fst-italic fw-lighter">A week mission outreach, featuring: house to house envangelism, open air preaching, ministers/workers conference.</h2>
                  <p><a class="btn btn-primary" href="<?= URLROOT; ?>/portal/register"> Register now</a> </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</section>
</header>
<main class="">
  <section class="pb-5">
    <div class="container">
      <div class="row animate-box">
        <div class="col-md-12 offset-md-0 text-center">
          <h2>Living in God's Amazing Grace!</h2>
          <span>We are open Sunday to Monday <a style="font-weight: bold;font-size: 19" href="<?= URLROOT; ?>/pages/contact">contact us</a> </span>
        </div>
      </div>
    </div>
  </section>

  <section class="pb-5">
    <div class="container">
      <div class="row animate-box">
        <div class="col-md-10 offset-md-1 text-center">
          <h2>Whom We Are</h2>
          <span><?= $data['core']->WWA; ?>
          </span>
        </div>
      </div>
    </div>
  </section>


  <hr class="mb-0">
  <?php if (!empty($data['uploads'])) : ?>
    <section id="sermon">
      <div class="container">
        <div class="row animate-box">
          <div class="col-md-6 offset-md-3 text-center heading">
            <h2 class="m-0">Our Sermons</h2>
          </div>
        </div>
        <div class="row">
          <?php foreach ($data['uploads'] as $uploads) : ?>
            <div class="col-md-4 text-center animate-box mb-3">
              <div class="sermon-entry">
                <div class="sermon" style="background-image: url(<?= URLROOT . '/' . $uploads->thumbnail; ?>);">

                  <div class="play">
                    <a class="" href="<?= URLROOT; ?>/pages/preview/<?= $uploads->id; ?>"><i class="bi bi-play fs-4"></i></a>
                  </div>
                </div>
                <h3><?= $uploads->title; ?></h3>
                <span><?= $uploads->preacher; ?></span>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <a class="float-end" href="<?= URLROOT; ?>/pages/resources">More <i class="bi bi-arrow-right"></i></a>
    </section>
  <?php endif; ?>

  <!-- <?php if (!empty($data['articles'])) : ?>
    <section id="articles" class="light-grey">
      <div class="container">
        <div class="row animate-box">
          <div class="col-md-6 offset-md-3 text-center heading">
            <h2>Articles</h2>
          </div>
        </div>
        <div class="row">
          <?php foreach ($data['articles'] as $articles) : ?>
            <div class="col-md-4 animate-box mb-3">
              <div class="articles">
                <?php if (!empty($articles->thumbnail)) : ?>
                  <a href="<?= URLROOT; ?>/pages/study/<?= $articles->id; ?>" class="img-holder"><img class="img-fluid" src="<?= URLROOT . '/' . $articles->thumbnail; ?>" alt="Article image placeholder"></a>
                <?php endif; ?>
                <div class="desc">
                  <h3><a href="<?= URLROOT; ?>/pages/study/<?= $articles->id; ?>"><?= $articles->title; ?></a></h3>
                  <p class="paragraph">
                    <?= $articles->content; ?>
                  </p>
                  <a class="mb-2" href="<?= URLROOT; ?>/pages/study/<?= $articles->id; ?>">Read More <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  <?php endif; ?> -->

  <?php if (!empty($data['verses'])) : ?>
    <section id="bible-verse">
      <div class="container">
        <div class="overlay"></div>
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <div class="row animate-box">
              <div class="owl-carousel owl-carousel-fullwidth">
                <?php foreach ($data['verses'] as $verse) : ?>
                  <div class="item">
                    <div class="bible-verse-slide active text-center">
                      <blockquote>
                        <p>&ldquo;<?= $verse->content; ?>.&rdquo;</p>
                        <span><?= $verse->verse; ?></span>
                      </blockquote>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>



  <section id="events">
    <div class="container">
      <div class="row animate-box">
        <div class="col-md-6 offset-md-3 text-center heading">
          <h2 class="m-0">Upcoming Meeting</h2>
        </div>
      </div>
      <div class="row">
        <!-- <div class="col-md-6 offset-md-3 text-center heading">
          <h2 class="">Recent Meeting</h2>
        </div> -->
        <div class="col-md-4 animate-box">
          <div class="events-entry">
            <a href="<?= URLROOT; ?>/portal/register" class="img-holder"><img class="img-fluid" src="<?= URLROOT; ?>/images/outreach.jpeg" alt="banner"></a>
            <span class="date">2025-03-29 &nbsp;<i class="bi bi-arrow-right"></i> &nbsp;2025-04-06</span>
            <h3 class="fw-light">Ogbuoma mission outreach | Harvesting Egbuoma for Christ</h3>
            <p>A week mission outreach, featuring: house to house envangelism, open air preaching, ministers/workers conference. <strong> @ Egbuoma in Oguta LGA Imo State.</strong></p>
            <a class="btn shadow" href="<?= URLROOT; ?>/portal/register"><i class="bi bi-pen-fill"></i> Register now</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="news" class="light-grey">
    <div class="container">
      <div class="row animate-box">
        <div class="col-md-6 offset-md-3 text-center heading">
          <h2>What We Believe</h2>
          <span><?= $data['core']->WWB; ?>
          </span>
        </div>
      </div>

    </div>
  </section>

</main>
<?php require APPROOT . '/views/inc/footer.php'; ?>