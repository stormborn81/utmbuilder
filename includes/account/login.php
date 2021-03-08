
<!-- Application container -->
  <div class="container-fluid container-application">
    <!-- Sidenav -->
    <!-- Content -->
    <div class="main-content position-relative">
      <!-- Page content -->
      <div class="page-content">
        <div class="min-vh-100 py-5 d-flex align-items-center">
          <div class="w-100">
            <div class="row justify-content-center">
              <div class="col-sm-8 col-lg-6">
                <div class="card shadow zindex-100 mb-0">
                  <div class="card-body px-md-5 py-5">
                    <div class="mb-5">
                      <h6 class="h3">Login</h6>
                      <?php
                      if (isset($_GET['signup'])) {
                        echo '<p class="text-muted mb-0">Your account has been created. Please sign in to your account to continue.</p>';
                      } else if (isset($_GET['logout'])) {
                        echo '<p class="text-muted mb-0">You have logged out of your session. Please sign in to your account to continue.</p>';
                      } else {
                        echo '<p class="text-muted mb-0">Sign in to your account to enter your space.</p>';
                      }
                      ?>
                    </div>
                    <span class="clearfix"></span>
                    <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="needs-validation">
                      <div class="form-group">
                        <label class="form-control-label">Email address</label>
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                          <input type="email" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" id="input-email" name="email" placeholder="name@example.com" value="<?php echo (!empty($_POST["email"])) ? trim($_POST["email"]) : '';  ?>">
                          <div class="invalid-feedback"><?php echo $username_err; ?></div>
                        </div>
                      </div>
                      <div class="form-group mb-4">
                        <div class="d-flex align-items-center justify-content-between">
                          <div>
                            <label class="form-control-label">Password</label>
                          </div>
                          <div class="mb-2">
                            <a href="recover.php" class="small text-muted text-underline--dashed border-primary">Lost password?</a>
                          </div>
                        </div>
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                          </div>
                          <input type="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" id="input-password" name="password" placeholder="Password" >
                          <div class="input-group-append">
                            <span class="input-group-text">
                              <a href="#" data-toggle="password-text" data-target="#input-password">
                                <i class="fas fa-eye"></i>
                              </a>
                            </span>
                          </div>
                          <div class="invalid-feedback"><?php echo $password_err; ?></div>
                        </div>
                      </div>
                      <div class="mt-4"><button type="submit" class="btn btn-sm btn-primary btn-icon rounded-pill">
                          <span class="btn-inner--text">Sign in</span>
                          <span class="btn-inner--icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                        </button></div>
                    </form>
                  </div>
                  <div class="card-footer px-md-5"><small>Not registered?</small>
                    <a href="create-account.php" class="small font-weight-bold">Create account</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
    </div>
  </div>