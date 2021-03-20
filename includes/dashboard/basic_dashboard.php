
        <!-- Page content -->
        <div class="page-content">
            <div class="page-title">
              <div class="row justify-content-between align-items-center">
                <div class="col-md-6 mb-3 mb-md-0">
                  <h5 class="h3 font-weight-400 mb-0 text-white" id="greeting">Welcome to Space</h5>
                  <span class="text-sm text-white opacity-8" id="subgreeting">UTMBuilder space that is</span>
                </div>
              </div>
            </div>
            <!-- Error Handling if necessary -->
            <?php if($error == 'delete-no-utm') { ?>
            <div class="row">
                <div class="col-xl-12">
                    <div class="alert alert-warning" role="alert">
                        <strong>Houston, we have a problem.</strong><br > It appears you tried to delete a UTM without the proper link information. If you keep receiving this error, please let our support team know at <a href="mailto:utmbuilderspace@gmail.com" class="alert-link">utmbuilderspace@gmail.com</a>
                    </div>
                </div>
            </div>
            <?php } else if($error == 'delete-general') {   ?>
            <div class="row">
                <div class="col-xl-12">
                    <div class="alert alert-warning" role="alert">
                        <strong>Houston, we have a problem.</strong><br > There has been an error in trying to delete your UTM, please try again later. If you keep receiving this error, please let our support team know at <a href="mailto:utmbuilderspace@gmail.com" class="alert-link">utmbuilderspace@gmail.com</a>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- Project details -->
            <div class="row">
              <div class="col-xl-12">
                <div class="card">
                  <div class="card-header border-0">
                    <div class="row align-items-center">
                      <div class="col">
                        <h6 class="mb-0">Recent UTMs Created (<?php echo $filrows; ?>)</h6>
                      </div>
                      <div class="col-auto">
                        <div class="actions">
                          <a href="<?php echo $site_URL; ?>application/utms/utm-listing.php" class="action-item">
                            <i class="fas fa-project-diagram"></i>
                            <span class="d-none d-sm-inline-block mr-4">See all UTMs</span>
                          </a>
                          <a href="<?php echo $site_URL; ?>application/utms/create-utm.php" role="button" class="btn btn-primary btn-icon">
                            <i class="fas fa-tag"></i>
                            <span class="d-none d-sm-inline-block">Create New UTM</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
                  //show table if there are UTMs to display
                  if($filrows > 0) { ?>
                  <div class="table-responsive">
                    <table class="table align-items-center">
                      <thead>
                        <tr>
                          <th scope="col" class="sort" data-sort="channel">Channel</th>
                          <th scope="col" class="sort" data-sort="source">Source</th>
                          <th scope="col" class="sort" data-sort="url">URL</th>
                          <th scope="col" class="sort" data-sort="date">Date Created</th>
                          <th scope="col" class="sort" data-sort="author">Created By</th>
                          <th scope="col" >Actions</th>
                        </tr>
                      </thead>
                      <tbody class="list">
                        <?php echo $list; ?>
                      </tbody>
                    </table>
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>
            <?php //handle empty data
            if($filrows<=5) { ?>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                   <div class="card card-fluid">
                      <div class="card-body text-center">
                           <a href="#" class="avatar avatar-lg">
                                <img src="<?php echo $site_URL; ?>assets/img/icons/space-icons/SVG/EDITABLE STROKES/33-rocket start.svg" alt="take-off" />
                           </a>
                           <h5 class="mb-4">Before you take off</h5>
                           <p class="mt-4 mb-0">
                             Not sure what a UTM is or how it can help you understand how your marketing activities work? Read this article before you start.
                           </p>
                           <a href="<?php echo $site_URL; ?>articles/what-is-a-utm.php" class="btn btn-sm btn-block btn-secondary mt-5">What is a UTM answered...</a>
                      </div>
                   </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                   <div class="card card-fluid">
                      <div class="card-body text-center">
                        <a href="#" class="avatar avatar-lg">
                            <img src="<?php echo $site_URL; ?>assets/img/icons/space-icons/SVG/EDITABLE STROKES/43-astronaut and flag.svg" alt="Create first utm" />
                        </a>
                        <h5 class="mb-4">Create your first UTMs!</h5>
                        <p class="mt-4 mb-0">
                          Use the UTM builder to create marketing URLs that effortlessly work with Google Analytics default channel groupings
                        </p>
                        <a href="<?php echo $site_URL; ?>application/utms/create-utm.php" class="btn btn-sm btn-block btn-primary mt-5">Create a UTM</a>
                      </div>
                   </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                   <div class="card card-fluid">
                      <div class="card-body text-center">
                          <a href="#" class="avatar avatar-lg">
                              <img src="<?php echo $site_URL; ?>assets/img/icons/space-icons/SVG/EDITABLE STROKES/14-galaxy.svg" alt="Take advantage of your utms" />
                          </a>
                          <h5 class="mb-4">To infinity and beyond</h5>
                          <p class="mt-4 mb-0">
                            UTM tagging is the start of your journey, next is using Google Analytics to understand your traffic and make decisions based on what you see.
                          </p>
                          <a href="<?php echo $site_URL; ?>articles/using-ga-to-view-channel-activity.php" class="btn btn-sm btn-block btn-secondary mt-5">Make the most of GA today</a>
                      </div>
                   </div>
                </div>
            </div>
            <?php } else {
            // show analytics
            ?>
            <div class="row">

            </div>
            <?php } ?>
        </div>

        <script>
        function trackCopy() {
            window.dataLayer.push({
                'event' : 'utm_action',
                'utm_action' : 'copy', // this should be replaced with an actual login method (when others are added)
                'utm_page':'dashboard'
            });
        }
        </script>


