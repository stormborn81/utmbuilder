<body class="application application-offset ready">
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
              <div class="col-sm-8 col-lg-5">
                <div class="card shadow zindex-100 mb-0">
                  <div class="card-body px-md-5 py-5">
                    <div class="mb-5">
                      <h6 class="h3">Create account</h6>
                      <p class="text-muted mb-0">We are currently only supporting Not-for-profit organisations. You will be required to prove NFP status before account is approved.</p>
                    </div>
                    <span class="clearfix"></span>
                    <form role="form">
                      <div class="form-group">
                        <label class="form-control-label">Business Name</label>
                        <div class="input-group input-group-merge">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-building"></i></span>
                            </div>
                            <input type="text" class="form-control" id="input-business" placeholder="Business Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-control-label">Email address</label>
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                          <input type="email" class="form-control" id="input-email" placeholder="name@example.com">
                        </div>
                      </div>
                      <div class="form-group mb-4">
                        <label class="form-control-label">Password</label>
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                          </div>
                          <input type="password" class="form-control" id="input-password" placeholder="********">
                          <div class="input-group-append">
                            <span class="input-group-text">
                              <a href="#" data-toggle="password-text" data-target="#input-password">
                                <i class="fas fa-eye"></i>
                              </a>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-control-label">Confirm password</label>
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                          </div>
                          <input type="password" class="form-control" id="input-password-confirm" placeholder="********">
                        </div>
                      </div>
                      <div class="my-4">
                        <div class="custom-control custom-checkbox mb-3">
                          <input type="checkbox" class="custom-control-input" id="check-terms">
                          <label class="custom-control-label" for="check-terms">I agree to the <a href="#">terms and conditions</a></label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="check-privacy">
                          <label class="custom-control-label" for="check-privacy">I agree to the <a href="#">privacy policy</a></label>
                        </div>
                      </div>
                      <div class="mt-4"><button type="button" class="btn btn-sm btn-primary btn-icon rounded-pill">
                          <span class="btn-inner--text">Create my account</span>
                          <span class="btn-inner--icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                        </button></div>
                    </form>
                  </div>
                  <div class="card-footer px-md-5"><small>Already have an account?</small>
                    <a href="login.php" class="small font-weight-bold">Sign in</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
    </div>
  </div>