<?php
include('../includes/config/config.php');
// Set Page meta data
$pName = 'Understanding GA Channel Definitions';
$pDesc = 'This article explains Google Analytics default channel groupings in both GA Universal and GA4 and how you can leverage them to improve your marketing analysis.';
$page = 'article';

include ('../includes/header.php');

include('../includes/public-nav.php'); ?>
<section class="slice slice-lg" data-offset-top="#header-main" id="headers-header-2">
    <div class="container pt-6">
        <div class="row justify-content-center">
          <div class="col-md-9">
            <h1 class="lh-150 mb-3">Your guide to understanding Channel Definitions in Google Analytics.</h1>
            <p class="lead text-muted mb-0">Find out how Google Analytics Channel Groupings work so you can discover your most effective marketing channels.</p>
            <div class="media align-items-center mt-5">
              <div>
                <a href="#" class="avatar rounded-circle mr-3">
                  <img alt="Image placeholder" src="<?php echo $site_URL; ?>assets/img/icons/space-icons/PNG/astronaut.png">
                </a>
              </div>
              <div class="media-body">
                <span class="d-block h6 mb-0">Storm Jarvie</span>
                <span class="text-sm text-muted">25 Mar 2021</span>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>
<section class="bg-cover bg-size--cover" style="height: 600px; background-image: url('<?php echo $site_URL; ?>assets/img/backgrounds/universe.jpg'); background-position: top center;"></section>
<section class="slice white">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-9">
        <!-- Article body -->
        <article>
            <p>Understanding how Google Analytics groups your activity based on UTM tracking tags will help you to navigate reporting in the platform to best understand how you are acquiring traffic to your website and how well that activity is working.</p>
            <p>The acquisition reports in Google Analytics provide insight into:</p>
            <ol>
            <li>Which sources are driving users to your site</li>
            <li>What actions are they taking when the get to site</li>
            <li>Which sources are driving the key conversions your business needs to grow</li>
            </ol>
            <h3>Channel? Source? Medium? Jupiter recognise!</h3>
            <p>A Channel in Google Analytics is a group of several sources with the same medium. Organic Search&rsquo; for example is a marketing channel that can be made up of any of the following sources so long as the medium is &lsquo;organic&rsquo;, i.e:</p>
            <ul>
            <li>Google (google&nbsp; / organic)</li>
            <li>Bing (bing / organic)</li>
            <li>DuckDuckGo (duckduckgo / organic)</li>
            </ul>
            <p>A Medium identifies the type of marketing activity that you are undertaking whether it be emails, social marketing or paid advertising.</p>
            <p>A Source identifies the particular vendor or platform that the marketing activity took place on, for example, social marketing may come from the sources &lsquo;facebook&rsquo;, &lsquo;twitter&rsquo;, &lsquo;instagram&rsquo; or a number of other social platforms</p>
            <h3>GA3 (Universal) or GA4? The changing World of Google Analytics</h3>
            <p>If you are already using Google Analytics, you are probably using the Universal tag, otherwise known as GA3. This measurement model tracks data like pageviews, events, transactions and goals within&nbsp; a given timeframe and groups it into a Session to understand site usage.</p>
            <p>Google Analytics has recently released it&rsquo;s new event-based measurement model called GA4 and if you are just starting out with your website, it is likely that you will be directed to set up a GA4 account. This model is based on events and parameters which allows you to build a more detailed view of user behaviour than GA3 previously could.</p>
            <p>The GA4 interface is quite different to the GA3 interface so we will provide you with information on both versions so you can make the most of the system you have.</p>
            <p>If you want to dig deep into the nerdy side of what makes GA4 different, <a href="https://discover.datarunsdeep.com.au/app-web/google-appweb-a-glimpse-into-the-future-of-analytics-tracking/" target="_blank">take a look at this handy guide</a>.</p>
            <h3>Google Analytics view on Channel Groupings</h3>
            <p>In Google Analytics, Channel groupings are rule-based definitions of your traffic sources. In the Acquisition &gt; Traffic acquisition report, you can select Session default channel grouping as the primary dimension so you can see your data organized according to the most common sources of traffic, like Paid Search and Direct. This lets you quickly check the performance of each of your traffic channels.</p>
            <p>These default system definitions reflect Google Analytics' current view of what mediums make up each channel. These definitions may evolve as the market evolves, but the below tables are the current status</p>
            <h4>GA3 (universal)</h4>
            <p>Note: These channel definitions are case sensitive. When manually tagging URLs, use lowercase tags to ensure Analytics categorizes sessions correctly. For example, email campaigns tagged as Email do not match the system definition for the Email channel.</p>
            <div class="table-responsive">
            <table class="table table-cards align-items-center">
            <thead>
            <tr>
            <td>Channel</td>
            <td>Definition</td>
            </tr>
            </thead>
            <tbody class="list">
            <tr>
            <td>Direct</td>
            <td>Source exactly matches direct <br >AND<br>Medium exactly matches (not set)<br>OR<br>Medium exactly matches (none)</td>
            </tr>
            <tr class="table-divider"></tr>
            <tr>
            <td>Organic Search</td>
            <td>Medium exactly matches organic</td>
            </tr>
            <tr class="table-divider"></tr>
            <tr>
            <td>Social</td>
            <td>Social Source Referral exactly matches Yes<br>OR<br>Medium matches regex ^(social|social-network|social-media|sm|social network|social media)$</td>
            </tr>
            <tr class="table-divider"></tr>
            <tr>
            <td>Email</td>
            <td>Medium exactly matches email</td>
            </tr>
            <tr class="table-divider"></tr>
            <tr>
            <td>Affiliates</td>
            <td>Medium exactly matches affiliate</td>
            </tr>
            <tr class="table-divider"></tr>
            <tr>
            <td>Referral</td>
            <td>Medium exactly matches referral</td>
            </tr>
            <tr class="table-divider"></tr>
            <tr>
            <td>Paid Search</td>
            <td>Medium matches regex ^(cpc|ppc|paidsearch)$<br>AND<br>Ad Distribution Network does not exactly match Content</td>
            </tr>
            <tr class="table-divider"></tr>
            <tr>
            <td>Other Advertising</td>
            <td>Medium matches regex ^(cpv|cpa|cpp|content-text)$</td>
            </tr>
            <tr class="table-divider"></tr>
            <tr>
            <td>Display</td>
            <td>Medium matches regex ^(display|cpm|banner)$<br>OR<br>Ad Distribution Network exactly matches Content</td>
            </tr>
            <tr class="table-divider"></tr>
            <tr>
            <td>(unavailable) or (other)</td>
            <td>Sessions don't match any channel description.</td>
            </tr>
            </tbody>
            </table>
            </div>
            <h4>GA4</h4>
            <p>Note that GA4 groupings are not case sensitive</p>
            <div class="table-responsive">
                <table class="table table-cards align-items-center">
                <thead>
            <tr>
            <td>Channel</td>
            <td>Definition</td>
            </tr>
            </thead>
            <tbody  class="list">
            <tr>
            <td>Direct</td>
            <td>Source exactly matches direct<br>AND<br>Medium exactly matches (not set)<br>OR<br>Medium exactly matches (none)</td>
            </tr>
            <tr class="table-divider"></tr>
            <tr>
            <td>Organic Search</td>
            <td>Medium exactly matches organic</td>
            </tr>
            <tr class="table-divider"></tr>
            <tr>
            <td>Paid Social</td>
            <td>Source matches matches regex ^(internal list of social sites)$<br>AND<br>Medium matches regex ^(cpc|ppc|paid)$</td>
            </tr>
            <tr class="table-divider"></tr>
            <tr>
            <td>Organic Social</td>
            <td>Source matches matches regex ^(internal list of social sites)$<br>OR<br>Medium matches regex ^(social|social-network|social-media|sm|social network|social media)</td>
            </tr>
            <tr class="table-divider"></tr>
            <tr>
            <td>Email</td>
            <td>Medium = email|e-mail|e_mail|e mail<br>OR<br>Source = email|e-mail|e_mail|e mail</td>
            </tr>
            <tr class="table-divider"></tr>
            <tr>
            <td>Affiliates</td>
            <td>Medium = affiliate|affiliates</td>
            </tr>
            <tr class="table-divider"></tr>
            <tr>
            <td>Referral</td>
            <td>Medium = referral</td>
            </tr>
            <tr class="table-divider"></tr>
            <tr>
            <td>Paid Search</td>
            <td>(GA Medium matches regex ^(cpc|ppc|paidsearch)$<br>AND<br>GA Ad Network does not exactly match DISPLAY)<br>OR<br>GA Ad Network exactly matches PAID_SEARCH</td>
            </tr>
            <tr class="table-divider"></tr>
            <tr>
            <td>Video</td>
            <td>GA Ad Network exactly matches VIDEO</td>
            </tr>
            <tr class="table-divider"></tr>
            <tr>
            <td>Display</td>
            <td>GA Ad Network exactly matches DISPLAY</td>
            </tr>
            </tbody>
            </table>
            </div>
            <br>
            <h3>Why should I match my medium choices to Google Analytics channel groupings if I have my own source / mediums?</h3>
            <p>When your business or not-for-profit is starting out, it is unlikely that you are going to have highly differentiated marketing strategies. The Default channel groupings allow you to take advantage of all the pre-built reporting in Google Analytics without having to build in custom channels or manually group similar traffic together when they have different mediums or source values.</p>
            <p>At an aggregate channel level (or using secondary dimensions in your GA reporting), you can quickly answer questions such as:</p>
            <ul>
            <li>Is social working for me overall or just for a few sources or campaigns?</li>
            <li>Are all those efforts to improve your SEO actually paying off?</li>
            <li>Which channels refer traffic most likely to convert on my key goals?</li>
            </ul>
            <p>By aligning to Google analytics&rsquo; conventions, you are also able to take advantage of these to get a quick view into how many different marketing touchpoints a user takes in order to make their final conversion in the GA3 Multi Channel Funnel reports. <a href="https://support.google.com/analytics/answer/1191180?hl=en" target="_blank" rel="noopener">You can read more about those here</a>.</p>
            <p>If your needs are more complex, or you want to break your traffic down even, further, you can also set up your own custom channel groupings. <a href="https://www.optimizesmart.com/understanding-channels-in-google-analytics/#a19" target="_blank">You can find more about this here.</a></p>
            <h2>Ready to reach for the stars?</h2>
            <p>Once you have your tagging strategy in place and have released your tagged URLs as part of your marketing activities, you can use Google Analytics to start to understand how well your activities are working.</p>
            <p>If you are new to Google Analytics, fly on over to this article about <a href="<?php echo $site_URL; ?>articles/using-ga-to-view-channel-activity.php">how to use Google Analytics to make sense of your marketing activity</a>.</p>


        </article>
      </div>
    </div>
  </div>
</section>
<div>
    <section>
        <div id="blog-blog-4" title="blog/blog-4.html">
          <section class="slice slice-lg bg-section-secondary  delimiter-top delimiter-bottom">
            <div class="container">
              <div class="mb-5 text-center">
                <h3 class=" mt-4">Latest from the blog</h3>
                <div class="fluid-paragraph mt-3">
                  <p class="lead lh-180">Our helpful articles will help you launch your marketing activities into space by showing you how to make the most of your analytics platform.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="card hover-shadow-lg hover-translate-y-n10">
                    <a href="<?php echo $site_URL; ?>articles/what-is-a-utm.php">
                      <img alt="What is a UTM" src="<?php echo $site_URL; ?>assets/img/articles/what-is-a-utm.jpg" class="card-img-top">
                    </a>
                    <div class="card-body py-5 text-center">
                      <a href="<?php echo $site_URL; ?>articles/what-is-a-utm.php" class="d-block h5 lh-150">So, what is a UTM?</a>
                      <h6 class="text-muted mt-4 mb-0">25 Mar 2021</h6>
                    </div>
                    <!-- Comments footer -->
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="card hover-shadow-lg hover-translate-y-n10">
                    <a href="<?php echo $site_URL; ?>articles/universal-GA-channel-definitions.php">
                      <img alt="Image placeholder" src="<?php echo $site_URL; ?>assets/img/articles/channel-definitions.jpg" class="card-img-top">
                    </a>
                    <div class="card-body py-5 text-center">
                      <a href="<?php echo $site_URL; ?>articles/universal-GA-channel-definitions.php" class="d-block h5 lh-150">Understanding channels in Google Analytics</a>
                      <h6 class="text-muted mt-4 mb-0">25 Mar 2021</h6>
                    </div>
                    <!-- Comments footer -->
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="card hover-shadow-lg hover-translate-y-n10">
                    <a href="<?php echo $site_URL; ?>articles/using-ga-to-view-channel-activity.php">
                      <img alt="Image placeholder" src="<?php echo $site_URL; ?>assets/img/articles/analysing-channels.jpg" class="card-img-top">
                    </a>
                    <div class="card-body py-5 text-center">
                      <a href="<?php echo $site_URL; ?>articles/using-ga-to-view-channel-activity.php" class="d-block h5 lh-150">How to analyse your traffic using channel reports in GA</a>
                      <h6 class="text-muted mt-4 mb-0">25 Mar 2021</h6>
                    </div>
                    <!-- Comments footer -->
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
    </section>
</div>
<?php
include('../includes/public-footer.php');
include('../includes/footer.php');
?>