<?php
include('includes/config/config.php');
// Set Page meta data
$pName = 'Welcome to UTMBuilder.space';
$pDesc = 'UTM Builder is a tool to support marketing teams in building UTM tagging links for optimal analysis of performance.';
$page = 'public';

include ('includes/header.php');?>

<nav class="navbar navbar-main navbar-expand-lg navbar-dark bg-gradient-dark navbar-border py-3" id="navbar-main">
    <div class="container px-lg-0">
      <!-- Logo -->
      <a class="navbar-brand mr-lg-5" href="index.php">
        <img alt="UTMbuilder.space logo" src="assets/img/brand/logo-white-space.png" id="navbar-logo">
      </a>
      <!-- Navbar collapse trigger -->
      <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Navbar nav -->
      <div class="collapse navbar-collapse" id="navbar-main-collapse">
        <ul class="navbar-nav align-items-lg-center">
          <li class="nav-item ">
            <a class="nav-link" href="application/support/support.php">Support</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="articles/home.php">Articles</a>
          </li>
        </ul>
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
          <li class="nav-item d-xl-block">
            <a class="nav-link" href="<?php echo $site_URL; ?>login.php" target="_blank">Login</a>
          </li>
          <li class="nav-item mr-0">
            <a href="<?php echo $site_URL; ?>create-account.php" target="_blank" class="nav-link d-lg-none">Signup now (Beta)</a>
            <a href="<?php echo $site_URL; ?>create-account.php" target="_blank" class="btn btn-sm btn-white btn-icon rounded-pill d-none d-lg-inline-flex" data-toggle="tooltip" data-placement="left" title="" data-original-title="">
              <span class="btn-inner--icon extra-pad"><i class="fas fa-plus"></i></span>
              <span class="btn-inner--text">Sign up now (Beta)</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Main Section -->
  <section class="slice slice-lg bg-gradient-dark header-web-app" data-offset-top="#header-main">
    <div class="bg-absolute-cover bg-size--contain d-flex align-items-center">
       <figure class="w-100 d-none d-lg-block">
           <img alt="Image placeholder" src="assets/img/svg/backgrounds/stars.svg" class="svg-inject">
       </figure>
    </div>
    <div class="container position-relative zindex-100">
       <div class="row justify-content-around align-items-center">
           <div class="col-lg-6 pt-lg-4 text-center">
               <h1 class="display-3 text-white mb-3">Jettison your UTM spreadsheets today</h1>
               <p class="lead text-white lh-180 mx-auto">
                   Blast your company's marketing team into orbit with UTMBuilder.space. Leave your spreadsheets behind and rocket your way to solid campaign tracking in Google Analytics.
               </p>
               <a href="<?php echo $site_URL; ?>create-account.php" class="btn btn-white btn-icon rounded-pill hover-translate-y-n3 mt-4">
                   <span class="btn-inner--text">Sign up for Beta Access today</span>
                   <span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
               </a>
           </div>
       </div>


    </div>
    <div class="shape-container" data-shape-style="curve" data-shape-position="bottom" style="height: 115.094px;">
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" class="injected-svg svg-inject fill-white">
                       <path d="M 0 0 c 0 0 200 50 500 50 s 500 -50 500 -50 v 101 h -1000 v -100 z"></path>
                   </svg>
               </div>

  </section>
  <section class="slice bg-white" id="sct-features">
      <div class="container">
        <div class="row justify-content-center mb-7">
            <div class="col-lg-8">
                <p class="h4 text-center lh-160">
                    Enter the cyberspace age with this simple tool that allows your marketing team to create consistent UTM tracking tags quickly. Built for marketing teams without complex tagging requirements who want to ensure that their activity ends up in the right Google Analytics default channel groupings for ease of analysis with the minimum of effort.
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-3 col-sm-6">
            <div class="card hover-shadow-lg hover-translate-y-n10">
              <div class="card-body px-5">
                <div class="py-4">
                  <div class="icon text-primary">
                    <i class="fas fa-puzzle-piece"></i>
                  </div>
                </div>
                <h5>Keep it consistent</h5>
                <p class="mt-3 mb-0">
                  Preset utm_medium values and definable utm_source values which ensure tags are always the same when they need to be.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="card hover-shadow-lg hover-translate-y-n10">
              <div class="card-body px-5">
                <div class="py-4">
                  <div class="icon text-primary">
                    <i class="fas fa-compress-arrows-alt"></i>
                  </div>
                </div>
                <h5>Replace spaces</h5>
                <p class="mt-3 mb-0">
                  Ensures spaces in utm_campaign and utm_content are replaced with + to minimise link issues.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="card hover-shadow-lg hover-translate-y-n10">
              <div class="card-body px-5">
                <div class="py-4">
                  <div class="icon text-primary">
                    <i class="fas fa-window-restore"></i>
                  </div>
                </div>
                <h5>Stay in Sync</h5>
                <p class="mt-3 mb-0">
                  Your team can always access created UTMs to make tracking and sharing easy. Say goodbye to your messy UTM spreadsheets today!
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="card hover-shadow-lg hover-translate-y-n10">
              <div class="card-body px-5">
                <div class="py-4">
                  <div class="icon text-primary">
                    <i class="fas fa-palette"></i>
                  </div>
                </div>
                <h5>Easy to understand</h5>
                <p class="mt-3 mb-0">
                  Built for marketing teams just looking to make the most out of Google Analytics channel reporting without having to think about it.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <section class="slice bg-section-secondary">
      <div class="container pt-9 pb-0 position-relative zindex-100">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-xl-6 col-lg-7">
            <h2 class="h1">Beta now open to Not-for-Profits.</h2>
            <p class="lead px-lg-5">
              While we prepare our rocketships to blast out to space, we have decided to prove the UTMbuilder platform free-of-charge (forever) to Not-For-Profit organisations who need a bit of help understanding their marketing activity. When you sign up you'll be asked o confirm your NFP status before your account is opened.
            </p>
            <a href="create-account.php" class="btn btn-primary btn-icon rounded-pill hover-translate-y-n3 mt-4">
                <span class="btn-inner--text">Sign up for beta access today</span>
                <span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
            </a>
          </div>
        </div>
      </div>
  </section>
  <section class="slice slice-lg bg-white overflow-hidden">
        <div class="bg-absolute-cover bg-size--contain d-flex align-items-center">
          <figure class="w-100">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1500 820" class="injected-svg svg-inject" style="height: 1000px;">
      <path class="fill-cyan" d="M 177.67 511.271 L 144.933 477.895 C 141.713 474.613 141.713 469.414 144.933 466.132 L 177.67 432.758 C 180.89 429.474 185.989 429.474 189.209 432.758 L 221.946 466.132 C 225.167 469.414 225.167 474.613 221.946 477.895 L 189.209 511.271 C 186.257 514.553 180.89 514.553 177.67 511.271 Z"></path>
      <circle class="fill-pink" cx="1209.162" cy="110.471" r="34.859"></circle>
      <circle class="fill-yellow" stroke-width="3" stroke-miterlimit="10" cx="333.261" cy="222.266" r="25.344"></circle>
      <path class="fill-blue" d="M 49.669 -9.998 C 51.03 -13.511 54.16 -16.03 57.882 -16.608 L 92.738 -22.023 C 96.459 -22.602 100.206 -21.149 102.568 -18.217 L 124.686 9.261 C 127.047 12.196 127.665 16.166 126.305 19.679 L 113.567 52.571 C 112.206 56.084 109.075 58.604 105.354 59.184 L 70.498 64.599 C 66.777 65.177 63.029 63.727 60.668 60.791 L 38.55 33.314 C 36.189 30.378 35.571 26.408 36.931 22.895 L 49.669 -9.998 Z"></path>
      <path class="fill-pink" d="M 1032.318 376.476 C 1033.264 374.034 1035.44 372.282 1038.028 371.88 L 1062.261 368.116 C 1064.848 367.713 1067.453 368.723 1069.095 370.762 L 1084.472 389.865 C 1086.114 391.906 1086.544 394.666 1085.598 397.108 L 1076.742 419.976 C 1075.796 422.418 1073.619 424.17 1071.032 424.574 L 1046.799 428.338 C 1044.212 428.74 1041.606 427.732 1039.965 425.691 L 1024.588 406.588 C 1022.946 404.547 1022.517 401.787 1023.462 399.344 L 1032.318 376.476 Z"></path>
      <path class="fill-purple" d="M 1396.93 665.688 C 1399.95 657.893 1406.894 652.305 1415.153 651.022 L 1492.489 639.008 C 1500.744 637.723 1509.057 640.947 1514.298 647.453 L 1563.372 708.418 C 1568.611 714.931 1569.981 723.739 1566.965 731.533 L 1538.703 804.512 C 1535.683 812.306 1528.736 817.897 1520.48 819.184 L 1443.144 831.199 C 1434.887 832.481 1426.573 829.264 1421.334 822.75 L 1372.26 761.786 C 1367.022 755.272 1365.65 746.463 1368.668 738.668 L 1396.93 665.688 Z"></path>
      <path class="fill-purple" d="M 264.129 775.914 C 265.075 773.472 267.251 771.72 269.839 771.318 L 294.072 767.554 C 296.659 767.151 299.264 768.161 300.906 770.2 L 316.283 789.303 C 317.925 791.344 318.355 794.104 317.409 796.546 L 308.553 819.414 C 307.607 821.856 305.43 823.608 302.843 824.012 L 278.61 827.776 C 276.023 828.178 273.417 827.17 271.776 825.129 L 256.399 806.026 C 254.757 803.985 254.328 801.225 255.273 798.782 L 264.129 775.914 Z"></path>
      <circle class="fill-cyan" stroke-width="3" stroke-miterlimit="10" cx="745.931" cy="783.228" r="25.344"></circle>
      <path class="fill-purple" d="M 929.895 57.225 C 930.389 55.951 931.524 55.036 932.875 54.826 L 945.523 52.862 C 946.873 52.652 948.232 53.179 949.089 54.243 L 957.115 64.213 C 957.972 65.278 958.196 66.719 957.702 67.993 L 953.08 79.928 C 952.587 81.203 951.45 82.117 950.1 82.328 L 937.453 84.293 C 936.103 84.502 934.742 83.976 933.886 82.911 L 925.86 72.941 C 925.004 71.876 924.78 70.435 925.273 69.16 L 929.895 57.225 Z"></path>
  </svg>
          </figure>
        </div>
        <div class="container position-relative zindex-100">
          <div class="mb-5 px-3 text-center">
            <span class="badge badge-soft-success badge-pill badge-lg">
              Articles
            </span>
            <h3 class=" mt-4">To infinity and beyond</h3>
            <div class="fluid-paragraph mt-3">
              <p class="lead lh-180">UTM tagging is just the first part of getting the most out the channel reporting in Google Analytics. Read our helpful guides to answer all your UTM questions.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="card px-3">
                <div class="card-body py-5">
                  <div class="d-flex align-items-center">
                    <div class="icon bg-gradient-primary text-white rounded-circle icon-shape shadow-primary">
                      <i class="fab fa-html5"></i>
                    </div>
                    <div class="icon-text pl-4">
                      <h5 class="mb-0">What is a UTM?</h5>
                    </div>
                  </div>
                  <p class="mt-4 mb-0">Understand the components of a UTM and how you can make them work for your organisation.</p>
                  <a href="articles/what-is-a-utm.php" class="btn btn-primary rounded-pill hover-translate-y-n3 mt-4 d-none d-sm-inline-block" data-scroll-to="">Read article now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card px-3">
                <div class="card-body py-5">
                  <div class="d-flex align-items-center">
                    <div class="icon bg-gradient-warning text-white rounded-circle icon-shape shadow-warning">
                      <i class="fab fa-node-js"></i>
                    </div>
                    <div class="icon-text pl-4">
                      <h5 class="mb-0">Understanding Channels in GA</h5>
                    </div>
                  </div>
                  <p class="mt-4 mb-0">How the UTMs are classed into the GA channels and how channels are changing with the introduction of GA4.</p>
                  <a href="articles/universal-GA-channel-definitions.php" class="btn btn-primary rounded-pill hover-translate-y-n3 mt-4 d-none d-sm-inline-block" data-scroll-to="">Read article now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card px-3">
                <div class="card-body py-5">
                  <div class="d-flex align-items-center">
                    <div class="icon bg-gradient-info text-white rounded-circle icon-shape shadow-info">
                      <i class="fas fa-thumbs-up"></i>
                    </div>
                    <div class="icon-text pl-4">
                      <h5 class="mb-0">Reporting on Channel Traffic</h5>
                    </div>
                  </div>
                  <p class="mt-4 mb-0">The definitive guide to reporting channels in Google Analytics + some helpful resources to launch you into space.</p>
                  <a href="articles/using-ga-to-view-channel-activity.php" class="btn btn-primary rounded-pill hover-translate-y-n3 mt-4 d-none d-sm-inline-block" data-scroll-to="">Read article now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  <!-- footer -->
  <footer class="footer footer-light bg-white pt-0">
      <div class="container">
        <div class="row align-items-center justify-content-md-between py-4 delimiter-top">
          <div class="col-md-6">
            <div class="copyright text-sm font-weight-bold text-center text-md-left">
              © 2021 <a href="https://utmbuilder.space" class="h6 text-sm font-weight-bold" target="_blank">UTMBuilder.space</a>. All rights reserved.
            </div>
          </div>
        </div>
      </div>
    </footer>
<?php
include ('includes/footer.php');
?>

