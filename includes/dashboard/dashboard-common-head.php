<!-- Application container -->
<div class="container-fluid container-application">
    <!-- Sidenav -->
    <div class="sidenav" id="sidenav-main">
      <!-- Sidenav header -->
      <div class="sidenav-header d-flex align-items-center">
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler sidenav-toggler-dark d-md-none" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line bg-white"></i>
              <i class="sidenav-toggler-line bg-white"></i>
              <i class="sidenav-toggler-line bg-white"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- User mini profile -->
      <div class="sidenav-user d-flex flex-column align-items-center justify-content-between text-center">
        <!-- Avatar -->
        <div>
          <a href="#" class="avatar rounded-circle avatar-xl">
            <img alt="UTM Builder Spaceman" src="<?php echo $site_URL; ?>assets/img/icons/space-icons/SVG/EDITABLE STROKES/45-astronaut-white.svg">
          </a>
          <div class="mt-4">
            <h5 class="mb-0 text-white"><?php echo $_SESSION["business_name"]; ?></h5>
            <span class="d-block text-sm text-white opacity-8 mb-3"><?php echo $_SESSION["utm_acct_type"]; ?></span>
          </div>
        </div>
        <!-- User info -->
        <!-- Actions -->
      </div>
      <!-- Application nav -->
      <div class="nav-application clearfix">
        <a href="<?php echo $site_URL; ?>dashboard.php" class="btn btn-square text-sm">
          <span class="btn-inner--icon d-block"><i class="fas fa-home fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Home</span>
        </a>
        <a href="<?php echo $site_URL; ?>application/utms/create-utm.php" class="btn btn-square text-sm">
          <span class="btn-inner--icon d-block"><i class="fas fa-tag fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Create UTM</span>
        </a>
        <a href="<?php echo $site_URL; ?>application/utms/utm-listing.php" class="btn btn-square text-sm">
          <span class="btn-inner--icon d-block"><i class="fas fa-project-diagram fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">List UTMs</span>
        </a>
        <a href="<?php echo $site_URL; ?>application/user/profile.php" class="btn btn-square text-sm">
          <span class="btn-inner--icon d-block"><i class="fas fa-user-ninja fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Profile</span>
        </a>
      </div>
      <!-- Misc area -->

    </div>
    <!-- Content -->
    <div class="main-content position-relative">
        <!-- Main nav -->
        <nav class="navbar navbar-main navbar-expand-lg navbar-dark bg-primary navbar-border" id="navbar-main">
            <div class="container-fluid">
                <!-- User's navbar -->
                  <div class="navbar-user d-lg-none ml-auto">
                    <ul class="navbar-nav flex-row align-items-center">
                      <li class="nav-item">
                        <a href="#" class="nav-link nav-link-icon sidenav-toggler" data-action="sidenav-pin" data-target="#sidenav-main"><i class="fas fa-bars"></i></a>
                      </li>
                      <li class="nav-item dropdown dropdown-animate">
                        <a class="nav-link pr-lg-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="avatar avatar-sm rounded-circle">
                            <img alt="Image placeholder" src="<?php echo $site_URL; ?>assets/img/theme/light/team-4-800x800.jpg">
                          </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right dropdown-menu-arrow">
                          <h6 class="dropdown-header px-0">Hi, <?php echo $_SESSION['business_name']; ?>!</h6>
                          <a href="<?php echo $site_URL; ?>application/user/profile.php" class="dropdown-item">
                            <i class="fas fa-user"></i>
                            <span>My profile</span>
                          </a>
                          <div class="dropdown-divider"></div>
                          <a href="<?php echo $site_URL; ?>includes/account/logout.php" class="dropdown-item">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Logout</span>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </div>
                <!-- Navbar nav -->
                <div class="collapse navbar-collapse navbar-collapse-fade" id="navbar-main-collapse">
                    <ul class="navbar-nav align-items-lg-center"></ul>
                    <ul class="navbar-nav ml-lg-auto align-items-center d-none d-lg-flex">
                          <li class="nav-item">
                            <a href="#" class="nav-link nav-link-icon sidenav-toggler" data-action="sidenav-pin" data-target="#sidenav-main"><i class="fas fa-bars"></i></a>
                          </li>
                          <li class="nav-item dropdown dropdown-animate">
                            <a class="nav-link pr-lg-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <div class="media media-pill align-items-center">
                                <span class="avatar rounded-circle">
                                  <img alt="Image placeholder" src="<?php echo $site_URL; ?>assets/img/theme/light/team-4-800x800.jpg">
                                </span>
                                <div class="ml-2 d-none d-lg-block">
                                  <span class="mb-0 text-sm  font-weight-bold"><?php echo $_SESSION['business_name']; ?></span>
                                </div>
                              </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right dropdown-menu-arrow">
                              <h6 class="dropdown-header px-0">Hi, <?php echo $_SESSION['business_name']; ?>!</h6>
                              <a href="<?php echo $site_URL; ?>application/user/profile.php" class="dropdown-item">
                                <i class="fas fa-user"></i>
                                <span>My profile</span>
                              </a>
                              <div class="dropdown-divider"></div>
                              <a href="<?php echo $site_URL; ?>includes/account/logout.php" class="dropdown-item">
                                <i class="fas fa-sign-out-alt"></i>
                                <span>Logout</span>
                              </a>
                            </div>
                          </li>
                    </ul>


                </div>
            </div>
        </nav>