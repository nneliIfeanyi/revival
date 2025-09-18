<?php require APPROOT . '/views/inc/header.php'; ?>

<body class="index-page">
  <?php require APPROOT . '/views/inc/navigation.php'; ?>
  <main class="main">
    <!-- Hero -->
    <div class="mt-5 d-lg-block d-none"></div>
    <section class="py-5 hero-bg">
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-5 md-9">
            <div class="card shadow-sm">
              <div class="card-body bg-primary-subtle">
                <div class="py-5 text-center">
                  <audio controls>
                    <source src="<?php echo URLROOT . '/' . $data['audio']->file_url; ?>" type="">
                  </audio>
                  <p class="lead fw-bold mt-3">
                    <?php echo $data['audio']->title; ?>
                  </p>
                  <?php echo $data['audio']->details; ?>
                </div>
              </div>
            </div>
            <p class="mt-3 fst-italic fw-semi-bold">
              <a href="<?php echo URLROOT; ?>/audio" class="btn">View all Sermons <i class="bi bi-chevron-right"></i></a>
            </p>
          </div>

          <!-- Similar Category Row -->
          <div class="col-lg-7 ">
            <div class="card border-0">
              <div class="card-body">
                <h4 class="mb-2 text-center fst-italic">Sermons in this Category</h4>
                <hr style="color: green;" />
                <div class="row">
                  <?php foreach ($data['same_category'] as $audio) : ?>
                    <div class="col-lg-6">
                      <div class="m-2">
                        <div class="row shadow">
                          <div class="col-2 border d-flex justify-content-center align-items-center">
                            <i class="bi bi-mic text-success fs-2"></i>
                          </div>
                          <div class="col-10">
                            <h6 class="p-2 m-0">
                              <?php echo $audio->title; ?>
                            </h6>
                            <p class="ms-2" style="font-size:small;"> <?php echo $audio->preacher; ?></p>
                            <div class="d-flex justify-content-around" style="font-size:smaller">
                              <p>
                                <a href="<?php echo URLROOT ?>/audio/play/<?php echo $audio->id; ?>">
                                  <i class="bi bi-play text-success"></i><span>Play</span>
                                </a>
                              </p>
                              <p>
                                <a href="<?php echo URLROOT . '/' . $audio->file_url ?>" download>
                                  <i class="bi bi-download text-success" style="font-size: x-small;"></i><span>&nbsp;Download</span>
                                </a>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
  </main>
  <?php require APPROOT . '/views/inc/footer.php'; ?>

</body>

</html>

</html>