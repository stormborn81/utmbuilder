
<!-- Application container -->
  <div class="container-fluid container-application">
    <!-- Sidenav -->
    <!-- Content -->
    <div class="main-content position-relative">
      <!-- Main nav -->
      <!-- Page content -->
      <div class="page-content">
        <div class="min-vh-100 py-5 d-flex align-items-center">
          <div class="w-100">
            <div class="row justify-content-center">
              <div class="col-sm-8 col-lg-5 col-xl-4">
                <div class="card shadow zindex-100 mb-0">
                  <div class="card-body px-md-5 py-5">

                    <?php
                    // Show form if key and token are set
                    if($status=='reset') {
                    ?>
                    <div class="mb-5">
                      <h6 class="h3">Password reset</h6>
                      <p class="text-muted mb-0">Enter your email below to proceed.</p>
                    </div>
                    <span class="clearfix"></span>
                    <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="needs-validation">
                      <input type="hidden" class="form-control" id="input-email" name="email" value="<?php echo trim($_GET['key']); ?>">
                      <input type="hidden" class="form-control" id="input-token" name="reset_link_token" value="<?php echo trim($_GET['token']); ?>">
                      <div class="form-group mb4">
                        <label class="form-control-label">Password</label>
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                          </div>
                          <input type="password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" id="input-password" name="new_password" placeholder="********" value="<?php echo (!empty($_POST["new_password"])) ? trim($_POST["new_password"]) : '';; ?>">
                          <div class="input-group-append">
                            <span class="input-group-text">
                              <a href="#" data-toggle="password-text" data-target="#input-password">
                                <i class="fas fa-eye"></i>
                              </a>
                            </span>
                          </div>
                          <div class="invalid-feedback"><?php echo $new_password_err; ?></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-control-label">Confirm password</label>
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                          </div>
                          <input type="password" class="form-control <?php echo (!empty($confirm_new_password_err)) ? 'is-invalid' : ''; ?>" id="input-password-confirm" name="confirm_new_password" placeholder="********" value="<?php echo (!empty($_POST["confirm_new_password"])) ? trim($_POST["confirm_new_password"]) : ''; ?>">
                          <div class="invalid-feedback"><?php echo $confirm_new_password_err; ?></div>
                        </div>
                      </div>
                      <div class="mt-4"><button type="submit" class="btn btn-sm btn-primary btn-icon rounded-pill">
                          <span class="btn-inner--text">Reset password</span>
                          <span class="btn-inner--icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                        </button></div>
                    </form>

                    <?php } else if($status=='expired') { ?>

                    <div class="mb-5">
                      <h6 class="h3">Password reset</h6>
                      <p class="text-muted mb-0">This password reset link has expired, please click directly on the link provided or click here to <a href="recover.php">resend the reset password email</a>.</p>
                    </div>

                    <?php } else { ?>

                    <div class="mb-5">
                      <h6 class="h3">Password reset</h6>
                      <p class="text-muted mb-0">You have reached this page without the necessary/correct token information, please click directly on the link provided or click here to <a href="recover.php">resend the reset password email</a>.</p>
                    </div>

                    <?php } ?>
                  </div>
                  <div class="card-footer px-md-5"><small>Not registered?</small>
                    <a href="#" class="small font-weight-bold">Create account</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
    </div>
  </div>