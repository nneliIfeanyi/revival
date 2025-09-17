<?php require APPROOT . '/views/inc/header.php'; ?>

<body class="index-page">
  <?php require APPROOT . '/views/inc/navigation.php'; ?>

  <main class="main">

    <style>
      :root {
        --primary-color: #009970;
      }

      .navbar,
      .btn-primary {
        background-color: var(--primary-color) !important;
        border: none;
      }

      .btn-primary:hover {
        background-color: #007a59 !important;
      }

      .hero-audio {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo URLROOT; ?>/assets/img/av2.png') center/cover no-repeat;
        color: white;
        padding: 80px 0;
        text-align: center;
      }

      .audio-card audio {
        width: 100%;
        outline: none;
      }
    </style>
    <!-- Hero Section -->
    <section class="hero-audio">
      <div class="container">
        <h1 class="fw-bold mt-5 text-light">Audio Sermons</h1>
        <p class="lead">Listen to inspiring messages that uplift your faith</p>
      </div>
    </section>
    <div class="mt-4"></div>
    <!-- Search & Filter -->
    <!-- <div class="container py-4">
      <div class="row mb-4">
        <div class="col-md-8">
          <input type="text" class="form-control" placeholder="Search sermons by title or keyword...">
        </div>
        <div class="col-md-4">
          <select class="form-select">
            <option selected>Filter by Category</option>
            <option>Faith</option>
            <option>Prayer</option>
            <option>Hope</option>
            <option>Worship</option>
          </select>
        </div>
      </div>
    </div> -->

    <!-- Audio Sermon Cards -->
    <div class="container">
      <div class="container">
        <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">
          <!-- includeAudio here-->
          <?php foreach ($data['audios'] as $audio) : ?>
            <div class="col-lg-3 col-md-4 portfolio-item">
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
      <!-- Add more sermon cards as needed -->
    </div>
    <!-- Pagination -->
    <div class="mb-5"></div>
    </div>
  </main>
  <?php require APPROOT . '/views/inc/footer.php'; ?>

</body>

</html>