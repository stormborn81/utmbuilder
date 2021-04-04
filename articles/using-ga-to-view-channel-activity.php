<?php
include('../includes/config/config.php');
// Set Page meta data
$pName = 'Analysing Channel Activity in GA';
$pDesc = 'This article explains Google Analytics default channel groupings reports in both GA Universal and GA4 and how you can leverage them to improve your marketing analysis.';
$page = 'article';

include ('../includes/header.php');

include('../includes/public-nav.php'); ?>
<section class="slice slice-lg" data-offset-top="#header-main" id="headers-header-2">
    <div class="container pt-6">
        <div class="row justify-content-center">
          <div class="col-md-9">
            <h1 class="lh-150 mb-3">Your guide to understanding Channel Reports in Google Analytics.</h1>
            <p class="lead text-muted mb-0">Find out how Google Analytics Channel Reports work so you can discover your most effective marketing channels.</p>
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
<section class="bg-cover bg-size--cover" style="height: 600px; background-image: url('<?php echo $site_URL; ?>assets/img/backgrounds/earth.jpg'); background-position: top center;"></section>
<section class="slice white">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-9">
        <!-- Article body -->
        <article>
        <p>Once you have tagged your URLs with a UTM structure, the next step is to analyse the traffic in your analytics platform. This article will focus on Google Analytics but the principles will work in other platforms as well.</p>
        <h3>Understanding the reports in Google Analytics</h3>
        <p>If you are already using Google Analytics, you are probably using the Universal tag, otherwise known as GA3. This measurement model tracks data like pageviews, events, transactions and goals within&nbsp; a given timeframe and groups it into a Session to understand site usage.</p>
        <p>Google Analytics has recently released it&rsquo;s new event-based measurement model called GA4 and if you are just starting out with your website, it is likely that you will be directed to set up a GA4 account. This model is based on events and parameters which allows you to build a more detailed view of user behaviour than GA3 previously could.</p>
        <p>If you want to dig deep into the nerdy side of what makes GA4 different, <a href="https://discover.datarunsdeep.com.au/app-web/google-appweb-a-glimpse-into-the-future-of-analytics-tracking/" target="_blank" rel="noopener">take a look at this handy guide </a></p>
        <p>The GA4 interface is quite different to the GA3 interface so make sure you know what you are using. This article is focusing on GA3 but we will release an article on how to analyse in GA4 soon.</p>
        <h3>Finding the reports</h3>
        <p>You can find the Channel reporting in Google Analytics by navigating to Acquisition &gt; All Traffic &gt; Channels</p>
        <div class="article-image">
        <img src="<?php echo $site_URL; ?>assets/img/articles/channel-report.png" alt="How to find Channel Reports in GA" class="img-fluid rounded" />
        </div>
        <p>You will then see a table with all the channels listed that you have used to direct traffic to your site in the defined time period. In this report, the channels are the Primary Dimension.&nbsp;</p>
        <p>The first column will show all the channels that have generated visits to your website and the ABC Summary report for them. The ABC Summary has the key metrics for Acquisition, Behavior, and Conversions all on one report. This makes it very easy to analyze performance from just one place so that you can see which campaigns have been successful and which have underperformed and need to be modified.</p>
        <div class="article-image">
        <img src="<?php echo $site_URL; ?>assets/img/articles/primary-dimension.png" alt="ABC report in Google Analytics" class="img-fluid rounded" />
        </div>
        <p>The base reporting of the primary dimension gives you a top level view of performance but the stardust is hiding under the surface. For example, we can see that in the example above, the Referral channel has the strongest engagement rate of all channels, but why?</p>
        <p>By clicking on Referral in the list, we can drill down to understand what traffic within the referral channel is driving this difference from the source of the traffic, with the mall.googleplex.com source driving more engaged users.</p>
        <p>Using Secondary dimensions will help you make additional sense of your performance to understand why a channel is performing either well or poorly.&nbsp;</p>
        <div class="article-image">
        <img src="<?php echo $site_URL; ?>assets/img/articles/secondary-dimension.png" alt="How to apply secondary dimensions in GA" class="img-fluid rounded" />
        </div>
        <p>When we apply the Landing Page as a secondary dimension to the drilled down report we can see the top Landing pages that Referral traffic is driving to and how differently those sources perform for the same Landing pages. You have access to a number of secondary dimensions to help you answer questions like:</p>
        <ul>
        <li>Does the type of device a user is visiting your site on affect behaviour and is that different by channel?</li>
        <li>Do campaigns perform differently in different regions or countries and can you learn anything to help you with ad targeting from this information?</li>
        <li>Does time of day impact a Channel&rsquo;s ability to convert your users for a key goal?</li>
        </ul>
        <h3>Using Campaign as a different lens</h3>
        <p>Whether you are running a campaign across multiple channels or limiting campaigns within a single channel, you can use Campaign reporting to understand how specific messages are performing either as a whole or within each channel.</p>
        <p>Navigate to Acquisition &gt; Campaigns &gt; All Campaigns in Google Analytics to see a list of all utm_campaign values that you have used to direct traffic to your site in the given time period</p>
        <div class="article-image">
        <img src="<?php echo $site_URL; ?>assets/img/articles/campaign-report.png" alt="How to find Campaign Reports in GA" class="img-fluid rounded" />
        </div>
        <p>Once in the report, you can apply secondary dimensions and drill down to answer questions like</p>
        <ul>
        <li>If you used utm_content in your links for this campaign, which content drove the most traffic and the best performing traffic?</li>
        <li>If you used the campaign to push to different landing pages, did you see the same ad generate better conversions from one landing page compared to another?</li>
        <li>Did the same ad work better when you placed it on Facebook compared to Instagram?</li>
        </ul>
        <h3>Take off with Segments</h3>
        <p>Advanced Segments in Google Analytics allow you to interrogate other reports in more detail. If you have an eCommerce store, you can set up segments for the campaigns or channels of interest and apply them to your product performance reports to understand which products sold as a result of a campaign.</p>
        <p>At the top of reports where segmentation is available, you will see a button to allow you to apply a segment</p>
        <div class="article-image">
        <img src="<?php echo $site_URL; ?>assets/img/articles/add-segment.png" alt="How to add segments in GA" class="img-fluid rounded" />
        </div>
        <p>If you need to set up a segment for the traffic that is interest to you, click new segment and then use the options below to find the audience you want to explore, in this case all users who came to the site from a campaign that contained the word &lsquo;hoodies&rsquo;.</p>
        <div class="article-image">
        <img src="<?php echo $site_URL; ?>assets/img/articles/new-segment.png" alt="How to add new segments in GA" class="img-fluid rounded" />
        </div>
        <h3>Don&rsquo;t take the word of the first alien (or report) you see:</h3>
        <p>Whatever lens you choose to enter your traffic analysis with, it&rsquo;s important that you don&rsquo;t make decisions based on one view or report. Like all good astronauts, confirm your theories from several different data viewing angles to be sure your suspicions are accurate. This could save you from making a mistake that might make you cynical about the value of data-driven management.</p>
        <p>Take your time. Seek clarity.</p>
        <p>Have you ever stared at a graphic or photo for a long time before the alien hiding in the background (or some other visual weirdness) became apparent to you?</p>
        <p>Analytics is like that.</p>
        <p>If you&rsquo;ll look deep enough, you will be surprised by the conclusions you can land on. They could also open the horizon to significantly higher conversion rates and more revenue.</p>
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