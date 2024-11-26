<header class="header">
  <nav class="navbar navbar-nav navbar-expand-lg fixed-top bg-light shadow">
    <div class="container">
      <a href="<?= URLROOT; ?>/pages" class="navbar-brand d-flex align-items-center justify-content-start">
        <div class="logo-img"></div>
        <h4 id="logo-text" class="mb-0"><?= SITENAME; ?></h4>
      </a>
      <button class="navbar-toggler" type="button" data-bs-theme="" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="<?= URLROOT; ?>/pages" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="<?= URLROOT; ?>/pages/resources" class="nav-link">Resources</a>
          </li>
          <li class="nav-item">
            <a href="contact.html" class="nav-link">Contact</a>
          </li>
          <?php if(isset($_SESSION['user_id'])):?>
            
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Settings
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item" href="<?= URLROOT; ?>/users/settings/core">Core data</a></li>
              <li><a class="dropdown-item" href="<?= URLROOT; ?>/users/uploads">Video uploads</a></li>
              <li><a class="dropdown-item" href="<?= URLROOT; ?>/users/articles">Articles</a></li>
              <li><a class="dropdown-item" href="<?= URLROOT; ?>/users/verses/view">Verses</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="<?= URLROOT; ?>/users/logout">Logout</a></li>
            </ul>
          </li>
        <?php endif?>
        </ul>
      </div>
    </div>
  </nav><!-- End - Nav -->