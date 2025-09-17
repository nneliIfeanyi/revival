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

            .hero {
                background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo URLROOT; ?>/assets/img/av2.png') center/cover no-repeat;
                color: white;
                padding: 100px 0;
                text-align: center;
            }

            .resource-card i {
                font-size: 40px;
                color: var(--primary-color);
            }
        </style>
        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <h1 class="display-4 text-light fw-bold">Grow in Faith with Our Resources</h1>
                <p class="lead text-light">Ebooks, Sermons, Articles & More to Strengthen Your Walk</p>
                <a href="#resources" class="btn btn-primary btn-lg mt-3">Explore Resources</a>
            </div>
        </section>

        <!-- Resource Categories -->
        <section class="py-5" id="resources">
            <div class="container">
                <div class="row text-center mb-4">
                    <h2 class="fw-bold">Our Resources</h2>
                    <p class="text-muted">Choose from a variety of spiritual materials</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-3">
                        <div class="card p-4 text-center resource-card shadow-sm h-100">
                            <i class="fa-solid fa-book"></i>
                            <h5 class="mt-3">Magazines</h5>
                            <p>Download faith-building ebooks.</p>
                            <a href="<?php echo URLROOT; ?>/magazines" class="btn btn-outline-success btn-sm">Explore</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-4 text-center resource-card shadow-sm h-100">
                            <i class="fa-solid fa-headphones"></i>
                            <h5 class="mt-3">Audio Sermons</h5>
                            <p>Listen to uplifting sermons.</p>
                            <a href="<?php echo URLROOT; ?>/audio" class="btn btn-outline-success btn-sm">Listen</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-4 text-center resource-card shadow-sm h-100">
                            <i class="fa-solid fa-video"></i>
                            <h5 class="mt-3">Video Sermons</h5>
                            <p>Watch inspiring messages.</p>
                            <a href="javascript:void" class="btn btn-outline-success btn-sm">Watch</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-4 text-center resource-card shadow-sm h-100">
                            <i class="fa-solid fa-newspaper"></i>
                            <h5 class="mt-3">Articles</h5>
                            <p>Read thought-provoking articles.</p>
                            <a href="javascript:void" class="btn btn-outline-success btn-sm">Read</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Latest Resources Section -->
        <!-- <section class="py-5 bg-light">
            <div class="container">
                <div class="row text-center mb-4">
                    <h2 class="fw-bold">Latest Resources</h2>
                    <p class="text-muted">Explore the most recent additions to our library</p>
                </div>-->

        <!-- Tabs -->
        <!--
                <ul class="nav nav-tabs justify-content-center mb-4" id="resourceTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button">All</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="ebooks-tab" data-bs-toggle="tab" data-bs-target="#ebooks" type="button">Ebooks</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="audio-tab" data-bs-toggle="tab" data-bs-target="#audio" type="button">Audio</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="video-tab" data-bs-toggle="tab" data-bs-target="#video" type="button">Video</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="articles-tab" data-bs-toggle="tab" data-bs-target="#articles" type="button">Articles</button>
                    </li>
                </ul>-->

        <!-- Tab Content -->
        <!--<div class="tab-content" id="resourceTabsContent">-->

        <!-- All -->
        <!-- <div class="tab-pane fade show active" id="all">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="card shadow-sm h-100">
                                    <img src="https://picsum.photos/400/200?1" class="card-img-top" alt="Ebook">
                                    <div class="card-body">
                                        <h5 class="card-title">Ebook: Walking in Faith</h5>
                                        <p class="card-text text-muted">An inspiring guide to strengthen your walk with God.</p>
                                        <a href="#" class="btn btn-primary btn-sm">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card shadow-sm h-100">
                                    <img src="https://picsum.photos/400/200?2" class="card-img-top" alt="Audio">
                                    <div class="card-body">
                                        <h5 class="card-title">Audio Sermon: Power of Prayer</h5>
                                        <p class="card-text text-muted">Listen to a life-changing sermon on prayer.</p>
                                        <a href="#" class="btn btn-primary btn-sm">Listen</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card shadow-sm h-100">
                                    <img src="https://picsum.photos/400/200?3" class="card-img-top" alt="Video">
                                    <div class="card-body">
                                        <h5 class="card-title">Video Sermon: Hope in Christ</h5>
                                        <p class="card-text text-muted">Watch a powerful message about hope.</p>
                                        <a href="#" class="btn btn-primary btn-sm">Watch</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->

        <!-- Ebooks -->
        <!-- <div class="tab-pane fade" id="ebooks">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="card shadow-sm h-100">
                                    <img src="https://picsum.photos/400/200?4" class="card-img-top" alt="Ebook">
                                    <div class="card-body">
                                        <h5 class="card-title">Ebook: Living with Purpose</h5>
                                        <p class="card-text text-muted">Discover how to live intentionally with God’s plan.</p>
                                        <a href="#" class="btn btn-primary btn-sm">Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

        <!-- Audio -->
        <!-- <div class="tab-pane fade" id="audio">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="card shadow-sm h-100">
                                    <img src="https://picsum.photos/400/200?5" class="card-img-top" alt="Audio">
                                    <div class="card-body">
                                        <h5 class="card-title">Audio: Faith Over Fear</h5>
                                        <p class="card-text text-muted">Encouraging message to strengthen your trust in God.</p>
                                        <a href="#" class="btn btn-primary btn-sm">Listen</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

        <!-- Video -->
        <!-- <div class="tab-pane fade" id="video">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="card shadow-sm h-100">
                                    <img src="https://picsum.photos/400/200?6" class="card-img-top" alt="Video">
                                    <div class="card-body">
                                        <h5 class="card-title">Video: The Armor of God</h5>
                                        <p class="card-text text-muted">Practical teachings on spiritual warfare.</p>
                                        <a href="#" class="btn btn-primary btn-sm">Watch</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

        <!-- Articles -->
        <!-- <div class="tab-pane fade" id="articles">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="card shadow-sm h-100">
                                    <img src="https://picsum.photos/400/200?7" class="card-img-top" alt="Article">
                                    <div class="card-body">
                                        <h5 class="card-title">Article: Daily Devotion</h5>
                                        <p class="card-text text-muted">Practical steps for consistent devotion life.</p>
                                        <a href="#" class="btn btn-primary btn-sm">Read</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

        </div> <!-- End Tab Content -->

        <!-- </div>
        </section> -->
    </main>
    <?php require APPROOT . '/views/inc/footer.php'; ?>

</body>

</html>