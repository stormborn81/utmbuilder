        <!-- Page content -->
        <div class="page-content">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                   <!-- Page title -->
                   <div class="page-title">
                      <div class="row justify-content-between align-items-center">
                         <div class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-start mb-3 mb-md-0">
                            <!-- Page title -->
                            <div class="d-inline-block">
                              <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Create URL with UTM</h5>
                            </div>
                            <!-- Add in toggles to add new sources when this is a non-basic account -->

                         </div>
                         <div class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-end">
                             <a href="<?php echo $site_URL; ?>application/utms/add-source.php" class="btn btn-sm btn-white btn-icon rounded-pill" data-toggle="modal">
                                 <span class="btn-inner--icon"><i class="fab fa-sourcetree"></i></span>
                                 <span class="btn-inner--text">Add new source</span>
                             </a>
                         </div>
                      </div>
                   </div>
                   <!-- Created Message -->
                   <?php if($urlcomplete =="true") { ?>
                   <div class="card">
                      <div class="card-header actions-toolbar">
                        <div class="row justify-content-between align-items-center">
                            <div class="col">
                                <h6 class="d-inline-block mb-0">Success</h6>
                            </div>
                            <div class="col text-right">
                                <div class="actions">
                                  <a href="<?php echo $site_URL; ?>application/utms/utm-listing.php" class="action-item">
                                    <i class="fas fa-project-diagram"></i>
                                    <span class="d-none d-sm-inline-block mr-4">See all UTMs</span>
                                  </a>
                                  <a href="<?php echo $site_URL; ?>dashboard.php" role="button" class="btn btn-primary btn-icon">
                                    <i class="fas fa-home"></i>
                                    <span class="d-none d-sm-inline-block">Back to Dashboard</span>
                                  </a>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="card-body">
                           <h6>The created UTM is: </h6>
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-10">
                                        <?php echo $utm; ?>
                                    </div>
                                    <div class="col-2 text-right">
                                        <a data-clipboard-text="<?php echo $utm; ?>" class="action-item copy" data-toggle="tooltip" data-placement="top" title="Copy URL with UTM"><i class="far fa-copy"></i> Copy URL + UTM</a>
                                    </div>
                                </div>

                           <h6> <br />Create another UTM below</h6>
                      </div>
                   </div>
                   <?php } ?>
                   <form class="mt-4" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="needs-validation">
                      <div class="card">
                         <div class="card-body">
                            <!-- URL -->
                            <div class="form-group">
                                <label class="form-control-label">
                                  URL
                                </label>
                                <input type="text" class="form-control <?php echo (!empty($url_err)) ? 'is-invalid' : ''; ?>" id="input-url" name="url"  value="<?php echo (!empty($_POST["url"])) ? trim($_POST["url"]) : ''; ?>" placeholder="Enter your URL i.e. http://www.spaceman.com/page?star=vega">
                                <div class="invalid-feedback"><?php echo $url_err; ?></div>
                            </div>
                            <!-- UTM Channel -->
                            <div class="form-group">
                                <label class="form-control-label">
                                  Channel Grouping*
                                </label>
                                <select class="custom-select" name="channel" id="input-channel" required>
                                  <option>Select the default channel grouping</option>
                                  <?php echo $channels; ?>
                                </select>
                                <div class="invalid-feedback"><?php echo $channel_err; ?></div>
                            </div>
                            <!-- UTM Source -->
                            <div class="form-group">
                                <label class="form-control-label">
                                  Source*
                                </label>
                                <select class="custom-select" name="source" id="input-source" required>
                                  <option>Select the source</option>
                                </select>
                                <div class="invalid-feedback"><?php echo $source_err; ?></div>
                            </div>
                            <!-- UTM Campaign -->
                            <div class="form-group">
                                <label class="form-control-label">
                                  Campaign Name*
                                </label>
                                <small class="form-text text-muted mb-2 mt-0">
                                  Use this name to identify a specific promotion or strategic campaign.
                                </small>
                                <input type="text" class="form-control <?php echo (!empty($campaign_err)) ? 'is-invalid' : ''; ?>" id="input-campaign" name="campaign"  value="<?php echo (!empty($_POST["campaign"])) ? trim($_POST["campaign"]) : ''; ?>" placeholder="Enter your campaign name i.e. rocket take off sale " required>
                                <div class="invalid-feedback"><?php echo $campaign_err; ?></div>
                            </div>
                            <!-- UTM Content -->
                            <div class="form-group">
                                <label class="form-control-label">
                                  UTM Content
                                </label>
                                <small class="form-text text-muted mb-2 mt-0">
                                   Use the content name to differentiate ads or links within the same channel campaign that point to the same URL.
                                </small>
                                <input type="text" class="form-control <?php echo (!empty($content_err)) ? 'is-invalid' : ''; ?>" id="input-content" name="content"  value="<?php echo (!empty($_POST["content"])) ? trim($_POST["content"]) : ''; ?>" placeholder="Enter your content descriptor i.e header banner">
                            </div>
                            <!-- Divider -->
                            <hr class="mt-5 mb-4">
                            <!-- Buttons -->
                            <div class="text-right">
                                <a href="<?php echo $site_URL; ?>dashboard.php" class="btn btn-link text-sm text-muted font-weight-bold">Cancel UTM</a>
                                <button type="submit" class="btn btn-sm btn-primary rounded-pill">Create UTM</button>
                            </div>
                         </div>
                      </div>
                   </form>
                </div>
            </div>
        </div>

        <script>
        function trackCopy() {
            window.dataLayer.push({
                'event' : 'utm_action',
                'utm_action' : 'copy', // this should be replaced with an actual login method (when others are added)
                'utm_page':'create'
            });
        }

        <?php if($urlcomplete =="true") { ?>
            window.dataLayer.push({
                'event' : 'utm_create',
                'utm_action' : 'create', // this should be replaced with an actual login method (when others are added)
                'utm_page':'create'
            });
        <?php } ?>
        </script>

