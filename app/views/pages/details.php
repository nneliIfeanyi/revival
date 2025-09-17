<?php
require_once('inc/header.html');
?>

<body class="index-page">
  <?php
  require 'inc/navigation.php';
  ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container">
        <h1>Programme Details</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Programme Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6 mx-auto">
            <div class="portfolio-details-slider swiper init-swiper">

              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>

              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/rev1.jpg" alt="" class="img-fluid">
                </div>

                <!-- <div class="swiper-slide">
                  <img src="assets/img/portfolio/product-1.jpg" alt="">
                </div> -->

                <div class="swiper-slide">
                  <div class="">
                    <h3 class="text-center">Programme information</h3>
                    <ul>
                      <li><strong>Category</strong>: Revival Outreach</li>
                      <li><strong>Theme</strong>: Jesus Saves</li>
                      <li><strong>Start date</strong>: 01 March, 2020</li>
                      <li><strong>End date</strong>: 01 March, 2020</li>
                    </ul>
                  </div>
                </div>

                <div class="swiper-slide">
                  <h2>Exercitationem repudiandae officiis neque suscipit</h2>
                  <p>
                    Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                  </p>
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <!-- <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Programme information</h3>
              <ul>
                <li><strong>Category</strong>: Revival Outreach</li>
                <li><strong>Theme</strong>: Jesus Saves</li>
                <li><strong>Start date</strong>: 01 March, 2020</li>
                <li><strong>End date</strong>: 01 March, 2020</li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
              <h2>Exercitationem repudiandae officiis neque suscipit</h2>
              <p>
                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
              </p>
            </div>
          </div> -->

        </div>

      </div>

    </section><!-- /Portfolio Details Section -->

  </main>
  <?php
  require 'inc/footer.php';
  ?>

</body>

</html>