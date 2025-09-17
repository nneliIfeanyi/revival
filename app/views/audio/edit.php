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
                <?php flash('msg'); ?>
                <h1 class="h4 mb-3">Edit Audio Message</h1>
                <form method="POST" id="uploadForm" action="<?php echo URLROOT; ?>/audio/edit/<?php echo $data['id']; ?>" enctype="multipart/form-data" novalidate>
                  <!-- Audio meta -->
                  <div class="mb-3">
                    <label class="form-label">Title <span class="text-danger">*</span></label>
                    <input required name="title" value="<?php echo $data['audio']->title; ?>" class="form-control" type="text" placeholder="Message Title">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Preacher <span class="text-danger">*</span></label>
                    <input required name="preacher" value="<?php echo $data['audio']->preacher; ?>" class="form-control" type="text" placeholder="Name of Preacher">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Details <span style="font-size: smaller;">(Optional)</span></label>
                    <input name="details" value="<?php echo $data['audio']->details; ?>" class="form-control" type="text" placeholder="Holy seminar, 2021. organized by ---">
                  </div>
                  <div class="row g-3 mb-3">

                    <div class="col-md-6">
                      <label class="form-label">Category</label>
                      <select required name="category" id="" class="form-select">
                        <option selected value="<?php echo $data['audio']->category; ?>"><?php echo $data['audio']->category; ?></option>
                        <option value="discipleship">Discipleship</option>
                        <option value="marriage">Marriage</option>
                        <option value="leadership">Leadership</option>
                        <option value="revival">Revival</option>
                        <option value="mission">Mission</option>
                        <option value="service">Service</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Sermon delivery date</label>
                      <input required type="text" name="month_year" value="<?php echo $data['audio']->month_year; ?>" class="form-control" placeholder="eg 05,2024">
                      <div style="font-size: small;" class="form-text">Input only month and year in this format: <strong>(mm,yyyy)</strong></div>
                    </div>
                  </div>
                  <!-- Files -->
                  <div class="row g-3 mb-3">

                    <div class="col-md-6">
                      <label class="form-label">Audio file</label>
                      <audio id="player" controls>
                        <source src="<?php echo URLROOT . '/' . $data['audio']->file_url; ?>" type="audio/mpeg">
                        your browser does not support the audio element.
                      </audio>
                      <input name="audio_file" id="fileInput" class="form-control" type="file" accept=".mp3">
                      <div style="font-size: small;" class="form-text">Not more than 49mb.</div>
                      <p id="message" style="color: red;"></p>
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Is_series</label>
                      <select name="is_series" class="form-select">
                        <option selected value="<?php echo $data['audio']->is_series; ?>"><?php echo $data['audio']->is_series; ?></option>
                        <option value="1">Yes</option>
                      </select>
                      <div style="font-size: small;" class="form-text">Select <strong>yes</strong> if the message was delivered in sequence</div>
                    </div>
                  </div>

                  <!-- Submit -->
                  <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-success">Upload Audio</button>
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
    const MAX_FILE_SIZE = 49 * 1024 * 1024; // 2MB in bytes
    const fileInput = document.getElementById("fileInput");
    const form = document.getElementById("uploadForm");
    const message = document.getElementById("message");

    form.addEventListener("submit", function(event) {
      const file = fileInput.files[0]; // get the selected file
      if (file && file.size > MAX_FILE_SIZE) {
        event.preventDefault(); // stop form submission
        message.textContent = "File is too large. Maximum size is 49 MB.";
      } else {
        message.textContent = "";
      }
    });
  </script>
  <?php require APPROOT . '/views/inc/footer.php'; ?>

</body>

</html>

</html>