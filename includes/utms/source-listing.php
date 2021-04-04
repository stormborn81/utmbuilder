        <!-- Page content -->
        <div class="page-content">
            <div class="page-title">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-start mb-3 mb-md-0">
                      <!-- Page title + Go Back button -->
                      <div class="d-inline-block">
                        <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Sources</h5>
                      </div>
                      <!-- Additional info -->
                      <div class="align-items-center ml-4 d-inline-flex">
                        <span class="h4 text-info mb-0 mr-2"><?php echo $numrows; ?></span>
                        <span class="text-sm opacity-7 text-white">total Sources available</span>
                      </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-end">
                      <div class="actions actions-dark d-inline-block">
                         <a href="<?php echo $site_URL; ?>application/utms/add-source.php" role="button" class="btn btn-outline-secondary btn-white btn-icon rounded-pill">
                             <i class="fas fa-tag"></i>
                             <span class="d-none d-sm-inline-block">Create New Source</span>
                         </a>
                         <a href="<?php echo $site_URL; ?>application/utms/create-utm.php" role="button" class="btn btn-sm btn-white btn-icon rounded-pill">
                            <i class="fas fa-tag"></i>
                            <span class="d-none d-sm-inline-block">Create New UTM</span>
                         </a>
                      </div>
                    </div>
                </div>
            </div>
            <!-- Error Handling if necessary -->
            <?php if($error == 'delete-no-source') { ?>
            <div class="row">
                <div class="col-xl-12">
                    <div class="alert alert-warning" role="alert">
                        <strong>Houston, we have a problem.</strong><br > It appears you tried to delete a Source without the proper link information. If you keep receiving this error, please let our support team know at <a href="mailto:utmbuilderspace@gmail.com" class="alert-link">utmbuilderspace@gmail.com</a>
                    </div>
                </div>
            </div>
            <?php } else if($error == 'delete-general') {   ?>
            <div class="row">
                <div class="col-xl-12">
                    <div class="alert alert-warning" role="alert">
                        <strong>Houston, we have a problem.</strong><br > There has been an error in trying to delete your Source, please try again later. If you keep receiving this error, please let our support team know at <a href="mailto:utmbuilderspace@gmail.com" class="alert-link">utmbuilderspace@gmail.com</a>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- UTM listings -->
            <?php if($numrows > 0) { ?>
            <div class="card">
                <div class="card-header actions-toolbar border-0">

                  <div class="row justify-content-between align-items-center">
                      <div class="col">
                        <h6 class="d-inline-block mb-0">All Sources</h6>
                      </div>
                      <div class="col text-right">
                        <div class="actions">
                          <div class="dropdown">
                            <a href="#" class="action-item" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-stream"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <?php if($chans != '') { ?>
                                <a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="dropdown-item">Reset to all channels</a>
                              <?php } ?>
                              <?php echo $chfilt; ?>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
                <!-- Table -->
                <div class="table-responsive">
                    <table class="table align-items-center">
                        <thead>
                            <tr>
                              <th scope="col" class="sort" data-sort="channel">Channel</th>
                              <th scope="col" class="sort" data-sort="source">Source</th>
                              <th scope="col" class="sort" data-sort="date">Date Created</th>
                              <th scope="col" >Actions</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <?php echo $list; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- LOAD MORE-->
            <?php if($numrows > $rowsperpage) { ?>
            <div class="mt-4 text-center">
              <a class="btn btn-sm btn-neutral rounded-pill shadow hover-translate-y-n3 load-more">Load more</a>
              <input type="hidden" id="row" value="0">
              <input type="hidden" id="direction" value="<?php echo $direction; ?>">
              <input type="hidden" id="channelid" value="<?php echo $chansid; ?>">
              <input type="hidden" id="all" value="<?php echo $numrows; ?>">
              <input type="hidden" id="numrows" value="<?php echo $rowsperpage; ?>">
            </div>
            <?php }
             }

            if($numrows < 5 ) { ?>
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
                        <h5 class="mb-4">Create your first UTM!</h5>
                        <p class="mt-4 mb-0">
                          Use the UTM builder to create marketing URLs that effortlessly work with Google Analytics default channel groupings
                        </p>
                        <a href="<?php echo $site_URL; ?>application/utms/create-utm.php" class="btn btn-sm btn-block btn-primary mt-5">Create your 1st UTM</a>
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

             <?php } ?>

        </div>

        <script>
        function trackCopy() {
            window.dataLayer.push({
            	'event' : 'utm_action',
            	'utm_action' : 'copy', // this should be replaced with an actual login method (when others are added)
            	'utm_page':'list'
            });
        }
        </script>