<header class="header">
  <nav class="navbar navbar-nav navbar-expand-lg fixed-top bg-white shadow">
    <div class="container">
      <a href="<?= URLROOT; ?>/pages" class="navbar-brand d-flex align-items-center justify-content-start">
        <!-- <img src="<?php echo URLROOT; ?>/images/rev2.jpg" alt="logo img" style="width:40px; height: 40px;"> -->
        <img src="<?php echo URLROOT; ?>/images/usepng.png" alt="logo img" style="width:224px; height: 44px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-theme="" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <?php if (!isset($_SESSION['user_id'])): ?>
            <li class="nav-item">
              <a href="<?= URLROOT; ?>/pages" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="<?= URLROOT; ?>/pages/resources" class="nav-link">Resources</a>
            </li>
            <li class="nav-item">
              <a href="<?= URLROOT; ?>/portal/register" class="nav-link">Register</a>
            </li>
            <li class="nav-item">
              <a href="<?= URLROOT; ?>/pages/contact" class="nav-link">Contact</a>
            </li>
          <?php else: ?>

            <li class="nav-item"><a class="nav-link" href="<?= URLROOT; ?>/users/settings/core">Core</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= URLROOT; ?>/users/uploads/add">Videos</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= URLROOT; ?>/users/articles/add">Articles</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= URLROOT; ?>/pages/events/view">Events</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= URLROOT; ?>/users/registration">Database</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= URLROOT; ?>/users/verses/view">Verses</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= URLROOT; ?>/users/logout">Signout</a></li>
          <?php endif ?>
        </ul>
      </div>
    </div>
  </nav><!-- End - Nav -->
</header>