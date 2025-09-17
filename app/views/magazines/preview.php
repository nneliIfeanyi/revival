<?php require APPROOT . '/views/inc/header.php'; ?>

<body class="index-page">
    <?php require APPROOT . '/views/inc/navigation.php'; ?>
    <main class="main">
        <style>
            <?php include APPROOT . '/views/inc/internal_css.php'; ?>
        </style>
        <div class="mt-5"></div>
        <!-- Hero -->
        <section class="py-5 hero-bg">
            <div class="container py-4">
                <div class="row align-items-center g-5">
                    <div class="col-md-6 order-2 order-md-1">
                        <span class="badge badge-soft rounded-pill mb-3 text-success">The <span class="fst-italic"> Pilgrim's</span> Guide Post</span>
                        <h1 class="display-5 fw-bold section-title">Your eBook Title</h1>
                        <p class="lead text-secondary mb-4">A clear, practical guide that walks you through <em>exactly</em> what you need to know—without the fluff. Learn the core ideas in minutes, master them in hours.</p>
                        <div class="d-flex gap-2">
                            <!-- Replace href with your PDF path -->
                            <a id="download" class="btn btn-brand text-light btn-lg shadow-soft" href="assets/ebook.pdf" download>
                                Download Full PDF
                            </a>
                            <a class="btn btn-outline-secondary btn-lg" href="#toc">See Contents</a>
                        </div>
                        <p class="small text-muted mt-2">PDF • ~120 pages • Updated 2025</p>
                    </div>
                    <div class="col-md-6 text-center order-1 order-md-2">
                        <div class="cover-wrap shadow-soft d-inline-block">
                            <!-- Replace src with your real cover image -->
                            <img src="https://via.placeholder.com/600x800.png?text=eBook+Cover" class="img-fluid rounded" alt="eBook cover: Your eBook Title" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Table of Contents -->
        <section id="toc" class="py-5 bg-light border-top">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h2 class="h3 fw-bold mb-0">Table of Contents</h2>
                    <span class="text-muted small"></span>
                </div>
                <div class="row g-4 toc-list">
                    <div class="col-md-6">
                        <ol class="list-group list-group-numbered shadow-sm rounded-4">
                            <li class="list-group-item">Introduction: Why this book matters</li>
                            <li class="list-group-item">Chapter 1: Foundations & Core Principles</li>
                            <li class="list-group-item">Chapter 2: Tools, Setup & Workflow</li>
                            <li class="list-group-item">Chapter 3: Step-by-Step Framework</li>
                            <li class="list-group-item">Chapter 4: Common Pitfalls & Fixes</li>
                            <li class="list-group-item">Chapter 5: Templates & Checklists</li>
                        </ol>
                    </div>
                    <div class="col-md-6">
                        <ol start="7" class="list-group list-group-numbered shadow-sm rounded-4">
                            <li class="list-group-item">Chapter 6: Real-World Case Studies</li>
                            <li class="list-group-item">Chapter 7: Advanced Strategies</li>
                            <li class="list-group-item">Chapter 8: Metrics & Measuring Success</li>
                            <li class="list-group-item">Chapter 9: Next Steps & Resources</li>
                            <li class="list-group-item">Appendix A: Glossary</li>
                            <li class="list-group-item">Appendix B: Links & Tools</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="py-5" style="background: linear-gradient(135deg, #ffffff, #eef3ff);">
            <div class="container text-center">
                <h2 class="h3 fw-bold mb-3">Ready to dive in?</h2>
                <p class="text-secondary mb-4">Get the full, beautifully formatted PDF.</p>
                <!-- Replace href with your PDF path -->
                <a class="btn btn-brand btn-lg px-4 py-3 shadow-soft text-light" href="assets/ebook.pdf" download>
                    Download Magazine (PDF)
                </a>
                <p class="small text-muted mt-2">Instant download • Yours to keep</p>
            </div>
        </section>

    </main>
    <?php require APPROOT . '/views/inc/footer.php'; ?>
</body>

</html>