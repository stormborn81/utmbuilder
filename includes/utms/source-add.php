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
                      <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Add a source for your channels</h5>
                    </div>
                    <!-- Add in toggles to add new sources when this is a non-basic account -->

                 </div>
                 <div class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-end">
                     <a href="<?php echo $site_URL; ?>application/utms/create-utm.php" class="btn btn-sm btn-white btn-icon rounded-pill">
                         <span class="btn-inner--icon"><i class="fas fa-tag"></i></span>
                         <span class="btn-inner--text">Create a new UTM</span>
                     </a>
                 </div>
              </div>
           </div>
           <!-- Created Message -->
           <?php if($sourcecomplete =="true") { ?>
           <div class="card">
              <div class="card-header actions-toolbar">
                <div class="row justify-content-between align-items-center">
                    <div class="col">
                        <h6 class="d-inline-block mb-0">Success</h6>
                    </div>
                    <div class="col text-right">
                        <div class="actions">
                          <a href="<?php echo $site_URL; ?>application/utms/source-listing.php" class="action-item">
                            <i class="fas fa-project-diagram"></i>
                            <span class="d-none d-sm-inline-block mr-4">See all sources</span>
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
                   <h6> <br />Create another source below</h6>
              </div>
           </div>
           <?php } ?>
           <form class="mt-4" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="needs-validation">
              <div class="card">
                 <div class="card-body">
                    <!-- UTM Channel -->
                    <div class="form-group">
                        <label class="form-control-label">
                          Channel Grouping*
                        </label>
                        <select class="custom-select <?php echo (!empty($channel_err)) ? 'is-invalid' : ''; ?>" name="channel" id="input-channel-nochange" required>
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
                        <small class="form-text text-muted mb-2 mt-0">
                          Keep this short and human readable.
                        </small>
                        <input type="text" class="form-control <?php echo (!empty($source_err)) ? 'is-invalid' : ''; ?>" id="input-source" name="source"  value="<?php echo (!empty($_POST["source"])) ? trim($_POST["source"]) : ''; ?>" placeholder="Enter your source i.e. www.example.com OR Weibo " required>
                        <div class="invalid-feedback"><?php echo $source_err; ?></div>
                    </div>
                    <!-- Divider -->
                    <hr class="mt-5 mb-4">
                    <!-- Buttons -->
                    <div class="text-right">
                        <a href="<?php echo $site_URL; ?>dashboard.php" class="btn btn-link text-sm text-muted font-weight-bold">Cancel Source</a>
                        <button type="submit" class="btn btn-sm btn-primary rounded-pill">Create Source</button>
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

<?php if($sourcecomplete =="true") { ?>
    window.dataLayer.push({
        'event' : 'source_create',
        'source_action' : 'create', // this should be replaced with an actual login method (when others are added)
        'source_page':'create'
    });
<?php } ?>
</script>

