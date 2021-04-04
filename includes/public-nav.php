<nav class="navbar navbar-main navbar-expand-lg navbar-dark bg-gradient-dark navbar-border py-3" id="navbar-main">
    <div class="container px-lg-0">
      <!-- Logo -->
      <a class="navbar-brand mr-lg-5" href="index.php">
        <img alt="UTMbuilder.space logo" src="<?php echo $site_URL; ?>assets/img/brand/logo-white-space.png" id="navbar-logo">
      </a>
      <!-- Navbar collapse trigger -->
      <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Navbar nav -->
      <div class="collapse navbar-collapse" id="navbar-main-collapse">
        <ul class="navbar-nav align-items-lg-center">
          <li class="nav-item ">
            <a class="nav-link<?php echo ($page=='support') ? ' active' : ''; ?>" href="application/support/support.php">Support</a>
          </li>
          <li class="nav-item">
            <a class="nav-link<?php echo ($page=='article') ? ' active' : ''; ?>" href="articles/blog.php">Articles</a>
          </li>
        </ul>
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
          <li class="nav-item d-xl-block">
            <a class="nav-link" href="<?php echo $site_URL; ?>login.php" target="_blank">Login</a>
          </li>
          <li class="nav-item mr-0">
            <a href="<?php echo $site_URL; ?>create-account.php" target="_blank" class="nav-link d-lg-none">Signup now (Beta)</a>
            <a href="<?php echo $site_URL; ?>create-account.php" target="_blank" class="btn btn-sm btn-white btn-icon rounded-pill d-none d-lg-inline-flex" data-toggle="tooltip" data-placement="left" title="" data-original-title="">
              <span class="btn-inner--icon extra-pad"><i class="fas fa-plus"></i></span>
              <span class="btn-inner--text">Sign up now (Beta)</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>