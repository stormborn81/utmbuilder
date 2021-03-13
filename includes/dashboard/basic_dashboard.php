
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
            <!-- Project details -->
            <div class="row">
              <div class="col-xl-12">
                <div class="card">
                  <div class="card-header border-0">
                    <div class="row align-items-center">
                      <div class="col">
                        <h6 class="mb-0">Recent UTMs Created</h6>
                      </div>
                      <div class="col-auto">
                        <div class="actions">
                          <a href="<?php echo $site_URL; ?>application/utms/utm-listing.php" class="action-item">
                            <i class="fas fa-project-diagram"></i>
                            <span class="d-none d-sm-inline-block mr-4">See all UTMs</span>
                          </a>
                          <a href="application/utms/create-utm.php" role="button" class="btn btn-primary btn-icon">
                            <i class="fas fa-tag"></i>
                            <span class="d-none d-sm-inline-block">Create New UTM</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table align-items-center">
                      <thead>
                        <tr>
                          <th scope="col" class="sort" data-sort="channel"></th>
                          <th scope="col" class="sort" data-sort="channel-name">Channel</th>
                          <th scope="col" class="sort" data-sort="url">URL</th>
                          <th scope="col" class="sort" data-sort="date_create">Date Created</th>
                        </tr>
                      </thead>
                      <tbody class="list">
                        <tr>
                          <th scope="row">
                            <div class="media align-items-center">
                              <div>
                                <img alt="Channel Name" src="<?php echo $site_URL; ?>assets/img/theme/light/team-1-800x800.jpg" class="avatar rounded-circle avatar-sm">
                              </div>
                            </div>
                          </th>
                          <td>
                            <span>Channel name</span>
                          </td>
                          <td>
                            URL
                          </td>
                          <td>
                            20 Feb 2021
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>


