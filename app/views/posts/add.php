<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Audio Sermons - Faith Center</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://picsum.photos/1600/500?audio') center/cover no-repeat;
      color: white;
      padding: 80px 0;
      text-align: center;
    }

    .audio-card audio {
      width: 100%;
      outline: none;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand fw-bold" href="index.html">Faith Center</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About</a></li>
          <li class="nav-item"><a class="nav-link active" href="audio.html">Audio</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero-audio">
    <div class="container">
      <h1 class="fw-bold">Audio Sermons</h1>
      <p class="lead">Listen to inspiring messages that uplift your faith</p>
    </div>
  </section>

  <!-- Search & Filter -->
  <div class="container py-4">
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
  </div>

  <!-- Audio Sermon Cards -->
  <div class="container">
    <div class="row g-4">

      <div class="col-md-6">
        <div class="card shadow-sm p-3 audio-card h-100">
          <div class="d-flex align-items-center">
            <img src="https://picsum.photos/100/100?1" class="rounded me-3" alt="Speaker">
            <div>
              <h5 class="mb-1">Power of Prayer</h5>
              <small class="text-muted">Pastor John Doe • Jan 2025</small>
            </div>
          </div>
          <p class="mt-3 text-muted">A sermon teaching the strength of consistent prayer.</p>
          <audio controls>
            <source src="sample-audio.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
          </audio>
          <div class="mt-3">
            <a href="#" class="btn btn-primary btn-sm"><i class="fa-solid fa-download me-1"></i> Download</a>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card shadow-sm p-3 audio-card h-100">
          <div class="d-flex align-items-center">
            <img src="https://picsum.photos/100/100?2" class="rounded me-3" alt="Speaker">
            <div>
              <h5 class="mb-1">Faith Over Fear</h5>
              <small class="text-muted">Rev. Jane Smith • Dec 2024</small>
            </div>
          </div>
          <p class="mt-3 text-muted">Encouraging words to overcome fear with faith in Christ.</p>
          <audio controls>
            <source src="sample-audio2.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
          </audio>
          <div class="mt-3">
            <a href="#" class="btn btn-primary btn-sm"><i class="fa-solid fa-download me-1"></i> Download</a>
          </div>
        </div>
      </div>

      <!-- Add more sermon cards as needed -->

    </div>

    <!-- Pagination -->
    <nav class="mt-5">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>
  </div>

  <!-- Footer -->
  <footer class="text-white text-center py-4 mt-5" style="background-color:#007a59;">
    <p class="mb-1">&copy; 2025 Faith Center. All Rights Reserved.</p>
    <div>
      <a href="#" class="text-white me-3"><i class="fab fa-facebook"></i></a>
      <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
      <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>