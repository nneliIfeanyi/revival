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
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-7 mx-auto md-9">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h1 class="h4 mb-3">Upload eBook</h1>
                                <form id="ebookForm" method="POST" action="<?php echo URLROOT; ?>/magazines/add" enctype="multipart/form-data" novalidate>
                                    <!-- Book meta -->
                                    <div class="mb-3">
                                        <label class="form-label">Title <span class="text-danger">*</span></label>
                                        <input required name="title" class="form-control" type="text" placeholder="Main Heading / Book Name">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Intro / Brief Description</label>
                                        <textarea name="intro" class="form-control" rows="4" placeholder="Short intro or blurb about the book"></textarea>
                                    </div>

                                    <!-- Files -->
                                    <div class="row g-3 mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Cover image (required)</label>
                                            <input name="cover_image" class="form-control" type="file" accept="image/*">
                                            <div class="mt-2" id="coverPreviewWrap" style="display:none;">
                                                <img id="coverPreview" class="cover-preview" src="" alt="cover preview">
                                                <button type="button" id="clearCover" class="btn btn-sm btn-outline-secondary ms-2">Clear</button>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">PDF file (required)</label>
                                            <input required name="pdf_file" class="form-control" type="file" accept="application/pdf">
                                            <div class="form-text">Upload the full PDF version for downloads.</div>
                                        </div>
                                    </div>

                                    <!-- Chapters dynamic list -->
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <label class="form-label mb-0">Table of Contents — Chapters</label>
                                            <div>
                                                <button id="addChapterBtn" type="button" class="btn btn-sm btn-primary">+ Add Chapter</button>
                                                <button id="resetChaptersBtn" type="button" class="btn btn-sm btn-outline-secondary">Reset</button>
                                            </div>
                                        </div>

                                        <div id="chaptersList" class="d-flex flex-column">
                                            <!-- Template chapter (first default) -->
                                            <div class="d-flex chapter-row mb-2 align-items-start">
                                                <input name="chapters[]" class="form-control" placeholder="Chapter 1: Title or Section heading" />
                                                <button type="button" class="btn btn-outline-danger btn-sm ms-2 remove-chapter-btn" title="Remove">✕</button>
                                            </div>
                                        </div>
                                        <div class="form-text">Add book chapters or table of contents according to the order, from start to end.</div>
                                    </div>

                                    <!-- Submit -->
                                    <div class="d-flex gap-2">
                                        <button type="submit" class="btn btn-success">Upload eBook</button>
                                        <a href="/" class="btn btn-outline-secondary">Cancel</a>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-muted small">
                                Files will be uploaded to the server endpoint you define. Make sure to follow server enforced file size & type limits.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        // DOM refs
        const addBtn = document.getElementById('addChapterBtn');
        const resetBtn = document.getElementById('resetChaptersBtn');
        const chaptersList = document.getElementById('chaptersList');
        const coverInput = document.querySelector('input[name="cover_image"]');
        const coverPreviewWrap = document.getElementById('coverPreviewWrap');
        const coverPreview = document.getElementById('coverPreview');
        const clearCover = document.getElementById('clearCover');

        // Add a chapter row
        function addChapter(value = '') {
            const row = document.createElement('div');
            row.className = 'd-flex chapter-row mb-2 align-items-start';
            row.innerHTML = `
      <input name="chapters[]" class="form-control" placeholder="Chapter title" value="${escapeHtml(value)}" />
      <button type="button" class="btn btn-outline-danger btn-sm ms-2 remove-chapter-btn" title="Remove">✕</button>
    `;
            chaptersList.appendChild(row);

            // remove handler
            row.querySelector('.remove-chapter-btn').addEventListener('click', () => {
                row.remove();
            });
        }

        // escape simple HTML
        function escapeHtml(s) {
            return String(s).replaceAll('"', '&quot;').replaceAll('<', '&lt;').replaceAll('>', '&gt;');
        }

        // initial remove handler for default first row
        chaptersList.addEventListener('click', (e) => {
            if (e.target.classList.contains('remove-chapter-btn')) {
                const row = e.target.closest('.chapter-row');
                if (row) row.remove();
            }
        });

        addBtn.addEventListener('click', () => addChapter(''));
        resetBtn.addEventListener('click', () => {
            chaptersList.innerHTML = '';
            addChapter('');
        });

        // cover preview
        coverInput.addEventListener('change', (e) => {
            const file = e.target.files && e.target.files[0];
            if (!file) return hideCoverPreview();
            const url = URL.createObjectURL(file);
            coverPreview.src = url;
            coverPreviewWrap.style.display = 'inline-flex';
        });

        clearCover.addEventListener('click', () => {
            coverInput.value = '';
            hideCoverPreview();
        });

        function hideCoverPreview() {
            coverPreview.src = '';
            coverPreviewWrap.style.display = 'none';
        }

        // ensure there's at least one chapter before submit
        document.getElementById('ebookForm').addEventListener('submit', (e) => {
            const chapterInputs = document.querySelectorAll('input[name="chapters[]"]');
            let hasNonEmpty = false;
            for (let i = 0; i < chapterInputs.length; i++) {
                if (chapterInputs[i].value.trim() !== '') {
                    hasNonEmpty = true;
                    break;
                }
            }
            if (!hasNonEmpty) {
                e.preventDefault();
                alert('Please add at least one chapter title in the Table of Contents.');
            }
        });

        // create initial chapter if none
        if (chaptersList.children.length === 0) addChapter('');
    </script>

    <?php require APPROOT . '/views/inc/footer.php'; ?>
</body>

</html>