<?php require APPROOT . '/views/inc/header.php'; ?>

<body class="index-page">
    <?php require APPROOT . '/views/inc/navigation.php'; ?>

    <main class="main">
        <!-- Page Title -->
        <div class="page-title light-background">
            <div class="container">
                <h2>Contact Us</h2>
                <p>We are open Monday to Sunday..</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li class="current">Contact</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-5">

                        <div class="info-wrap">
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h3>Address</h3>
                                    <p>Mission House Akokwa Imo State Nigeria</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone flex-shrink-0"></i>
                                <div>
                                    <h3>Call Us</h3>
                                    <p>08032495630</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h3>Email Us</h3>
                                    <p>heaven4all7@gmail.com</p>
                                </div>
                            </div><!-- End Info Item -->
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <?php flash('msg'); ?>
                        <form action="<?php echo URLROOT; ?>/contact/send_message" method="POST" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <label for="name-field" class="pb-2">Your Name</label>
                                    <input type="text" name="names" id="name-field" class="form-control" required="">
                                </div>

                                <div class="col-md-6">
                                    <label for="phone-field" class="pb-2">Phone Number</label>
                                    <input type="text" class="form-control" pattern="^\+?[0-9]\d{1,14}$" inputmode="numeric" name="phone" id="phone-field" required="">
                                </div>
                                <div class="col-md-12">
                                    <label for="message-field" class="pb-2">Message</label>
                                    <textarea class="form-control" name="message_body" rows="7" id="message-field" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <input type="submit" value="Send Message" id="sendBtn" class="btn btn-success rounded-3">
                                    <!-- <button id="sendBtn" type="button">Send Message</button> -->
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>
    <?php require APPROOT . '/views/inc/footer.php'; ?>
</body>

</html>