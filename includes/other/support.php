<body class="application application-offset">
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
              <div class="col-sm-8 col-lg-8 col-xl-6">
                <?php if($sendStatus == 'true') { ?>
                <div class="row">
                    <div class="alert alert-group alert-success alert-icon" role="alert">
                    	<div class="alert-group-prepend">
                            <span class="alert-group-icon text-">
                                <i class="fas fa-thumbs-up"></i>
                            </span>
                        </div>
                        <div class="alert-content">
                            <strong>Blast off!</strong> Your message is flying through cyberspace to our inbox and we'll be in touch in the next 48 hours or less.<br><br>
                            <a href="<?php echo $site_URL; ?>dashboard.php?>">Click here to go back to the Dashboard</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <div class="card shadow zindex-100 mb-0">
                  <div class="card-body px-md-5 py-5">
                    <div class="mb-5">
                      <h6 class="h3">Support</h6>
                      <p class="text-muted mb-0">Fill in the form below to reach the UTMBuilder.space support team. One of our astronauts will respond to you within the next 48 hours.</p>
                    </div>
                    <span class="clearfix"></span>
                    <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="needs-validation">
                      <div class="form-group">
                        <label class="form-control-label">Email address*</label>
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                          <input type="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" id="input-email" placeholder="name@example.com" name="email" value="<?php echo (!empty($_POST["email"])) ? trim($_POST["email"]) : '';  ?>" >
                          <div class="invalid-feedback"><?php echo $email_err; ?></div>
                        </div>
                      </div>
                      <div class="form-group">
                          <label class="form-control-label">Name*</label>
                          <div class="input-group input-group-merge">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" id="input-name" placeholder="Please enter your name" name="name" value="<?php echo (!empty($_POST["name"])) ? trim($_POST["name"]) : '';  ?>" >
                            <div class="invalid-feedback"><?php echo $name_err; ?></div>
                          </div>
                      </div>
                      <div class="form-group">
                            <label class="form-control-label">Your Message*</label>
                            <div class="input-group input-group-merge">
                              <textarea class="form-control <?php echo (!empty($message_err)) ? 'is-invalid' : ''; ?>" id="input-message" name="message" placeholder="Let us know how we can help" rows="3" value="<?php echo (!empty($_POST["message"])) ? trim($_POST["message"]) : '';  ?>"></textarea>
                              <div class="invalid-feedback"><?php echo $message_err; ?></div>
                            </div>
                      </div>
                      <div class="mt-4"><button type="submit" class="btn btn-sm btn-primary btn-icon rounded-pill">
                          <span class="btn-inner--text">Submit your query</span>
                          <span class="btn-inner--icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                        </button></div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <div class="footer pt-5 pb-4 footer-light" id="footer-main">
        <div class="row text-center text-sm-left align-items-sm-center">
          <div class="col-sm-6">
            <p class="text-sm mb-0">&copy; 2021 <a href="<?php echo $site_URL; ?>" class="h6 text-sm" target="_blank">UTMBuilder.space</a>. All rights reserved.</p>
          </div>
          <div class="col-sm-6 mb-md-0">
            <ul class="nav justify-content-center justify-content-md-end">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $site_URL; ?>application/support/support.php">Support</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $site_URL; ?>legal/terms-conditions.php">Terms</a>
              </li>
              <li class="nav-item">
                <a class="nav-link pr-0" href="<?php echo $site_URL; ?>legal/privacy-policy.php">Privacy</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>