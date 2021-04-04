<?php
include('../includes/config/config.php');
// Set Page meta data
$pName = 'What is a UTM';
$pDesc = 'This article explains what UTM tracking tags are and how you can leverage them to track your marketing analysis.';
$page = 'article';

include ('../includes/header.php');

include('../includes/public-nav.php'); ?>
<section class="slice slice-lg" data-offset-top="#header-main" id="headers-header-2">
    <div class="container pt-6">
        <div class="row justify-content-center">
          <div class="col-md-9">
            <h1 class="lh-150 mb-3">Your guide to understanding UTMs.</h1>
            <p class="lead text-muted mb-0">Find out how UTM Tracking tags work so you can follow your marketing activities across the internet.</p>
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
<section class="bg-cover bg-size--cover" style="height: 600px; background-image: url('<?php echo $site_URL; ?>assets/img/backgrounds/img-9.jpg'); background-position: top center;"></section>
<section class="slice white">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-9">
        <!-- Article body -->
        <article class="lead">
            <p>Can you tell me which of your online marketing campaigns are launching your website into the stratosphere?</p>
            <p>Wouldn&rsquo;t it be great if you could pull up the answer in just a few clicks within a Google Analytics report?</p>
            <p>Well you can: All you need is Google Analytics (or other tracking platform) and a few extra parameters added onto your URL.</p>
            <h2>The jet fuel to your marketing efforts</h2>
            <h4>So what is a UTM? And why should I care?</h4>
            <p>A UTM, which is short for Urchin Tracking Module, is a tool that allows you to track your web traffic in detail. UTMs are pieces of code that are added to a link or a URL which tell your analytics tools a bit more detail about each link.</p>
            <p>Here is a UTM example:&nbsp;</p>
            <div class="article-image">
                    <img src="<?php echo $site_URL; ?>assets/img/articles/utm-example.png" alt="Example of a URL tagged with UTM parameters" class="img-fluid rounded" />
                    </div>
            <p>UTM codes help you track the performance of each of your links so you can <strong>see where your traffic is coming from.</strong></p>
            <p>Without UTMs, you can only see the referrer (which is where the traffic came from). For example, you might be able to see that a certain percentage of your traffic came from Facebook, but you won&rsquo;t be able to tell which post, page, link, or ad it came from.&nbsp;</p>
            <p>This is the information that can help your marketing efforts really take off.</p>
            <p>The sky's the limit when it comes to tracking links with UTM codes but the earlier you start with a strategic approach, the less likely you are to waste time and energy in trying to build understanding from your data in the future.</p>
            <p>To set a strategy, we first have to understand what a solidly tagged URL can do for you.</p>
            <h4>How can a UTM link take my business to the moon and beyond?</h4>
            <p>With a correctly tagged URL, you can start to answer questions like:</p>
            <ol>
            <li>Where is your traffic coming from?</li>
            <li>Which activity from those sources is driving the bulk of that traffic?</li>
            <li>Which activity from those sources is driving the most effective outcomes?</li>
            </ol>
            <p>Essentially, UTM codes can help you pinpoint your most effective traffic so you can do more of the same activity to get more of that effective traffic.</p>
            <p>It works by providing between 3-5 pieces of information to your URLs in the form or parameters</p>
            <ul>
            <li>Campaign Source: The platform (or vendor) where the traffic originates, like Facebook or your email newsletter.</li>
            <li>Campaign Medium: You can use this to identify the medium like Cost Per Click (CPC), social media, affiliate, or QR code. Note that if you are using Google Analytics, there are specific Medium formats that will help you automatically allocate your traffic to the default channel groupings. You can read more about that here</li>
            <li>Campaign Name: This is just to identify your campaign. Like your website or specific product promotion. Here&rsquo;s an example screenshot with the campaign names you might see when you navigate to Traffic Sources &gt;&gt; Sources &gt;&gt; Campaigns.</li>
            <li>Campaign Content: (OPTIONAL) If you&rsquo;re A/B testing ads, then this is a useful metric that passes details about your ad. You can also use it to differentiate links that point to the same URL.</li>
            <li>Campaign Term: (OPTIONAL)&nbsp; You&rsquo;ll use this mainly for tracking your keywords during a paid AdWords campaign. You can also use it in your display ad campaigns to identify aspects of your audience.</li>
            </ul>
            <p>That&rsquo;s why a UTM tagged URL looks like:</p>
            <pre>https://example.com/?utm_source=newsletter&utm_medium=email&utm_content=-header-image&utm_campaign=march-2021-newsletter</pre>
            <p>The UTM parameters are where we are identifying the traffic that comes from this link</p>
            <p>&lt;image&gt;</p>
            <h4>So how can I make them?</h4>
            <p>There are plenty of tools out there that allow you to create them, with the most accessible free tool being</p>
            <ul>
            <li><a href="https://ga-dev-tools.appspot.com/campaign-url-builder/" target="_blank" rel="noopener">Google URL Builder</a></li>
            </ul>
            <p>But this tool will not help you define or maintain a tracking strategy, that is something you need to do for yourself.</p>
            <p>Here are some best practices to consider when you start a UTM tagging programme:</p>
            <p><strong>1. Create standard naming conventions for your parameters</strong></p>
            <p>Consistency is key with UTMs, right down to the sentence case of the text. Analytics tools group and match activity when it exactly matches previous values sent through, if you send a medium of &lsquo;Social&rsquo; in one link and &lsquo;social&rsquo; in another, they will be separate lines in the Source / medium reporting in Google Analytics.</p>
            <p>Ensure you use dashes over underscores, percentage (representation for spaces inside GA), and plus signs in your UTM values instead of spaces. Google algorithm doesn&rsquo;t penalize you for using them and they ensure that your links work when the user reaches your site.&nbsp;</p>
            <p>Make the most of the values you have by not being repetitive with the values or placing the same descriptor inside source and medium i.e:</p>
            <pre>https://www.example.com/?utm_source=facebook&utm_medium=facebook&utm_campaign=example</pre>
            <p>The best way is to make the UTMs flow like a normal sentence without any repetition or redundancy. See how easy it is to decipher your campaign details in the URL below. Also remember your users can see them in the URL bar of the browser so be empathetic with your naming conventions too</p>
            <p>The traffic source is Facebook with social as the medium (for accurate channel bucketing), content shows it is a post and a part of the spring 2021 campaign.</p>
            <pre>https://www.example.com/?utm_source=facebook&utm_medium=facebook&utm_campaign=example</pre>
            <p>It&rsquo;s like the acronym says, Keep it simple, Spaceman ;)</p>
            <p>UTMBuilder.space helps you to keep it simple by enforcing these rules on our basic accounts so you don&rsquo;t have to think about it.</p>
            <p><strong>2. Think about how your campaigns work across multiple sources of traffic</strong></p>
            <p>As marketing teams grow bigger, they tend to act like their own satellites, flying around space to achieve the same end but not connecting the dots within their own teams.</p>
            <p>If you are all working on the same campaign for Christmas sales or a particular donation drive, then use the same Campaign Name across all the different marketing channels you use to improve your ability to understand the overall success of the campaign as well as the channels that drove the best activity in that campaign.</p>
            <p><strong>3. Keep a record of your UTM links</strong></p>
            <p>When you are a team of one, you might be able to get away with keeping the tagging strategy to yourself but if someone else needs to get in on the tagging action, you&rsquo;ll want a way to share your tagged links so you and your team stay on the same page (or planet).</p>
            <p>Spreadsheets are a good way to start but can quickly get messy and they are easy to override.</p>
            <p>Tagging tools like utmbuilder.space can help you manage your tags and tagging rules in one single location. Our beta launch includes a managed naming convention that aligns with Google Analytics default channel groupings in both GA3 and GA4 plus implementations.</p>
            <p><strong>3. Ensure your analytics tool shows performance for your key conversion activity</strong></p>
            <p>Knowing how many people came to you is interesting but what really matters to your business isn&rsquo;t clicks and sessions, it&rsquo;s revenue.</p>
            <p>Make sure your analytics tool is set up to report on clear conversion-focused metrics that help your business understand if you are on the right track, like sales, donations, lead form submissions or email sign ups</p>
            <p>Use Ecommerce tracking or set up goal tracking inside GA to focus your attention on the metrics that matter. A great article on setting up goals in GA can be found <a href="https://neilpatel.com/blog/how-to-measure-reader-engagement-and-loyalty-using-google-analytics/" target="_blank" rel="noopener">here</a>.</p>
            <h2>Ready to reach for the stars?</h2>
            <p>Once you have your tagging strategy in place and have released your tagged URLs as part of your marketing activities, you can use Google Analytics to start to understand how well your activities are working.</p>
            <p>If you are new to Google Analytics, fly on over to <a href="<?php echo $site_URL; ?>articles/using-ga-to-view-channel-activity.php">this article about how to use Google Analytics to make sense of your marketing activity</a></p>

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