<?php
// Check logged in status
include ('../includes/account/status.php');
include ('../includes/config/config.php');

// Set Page meta data
$pName = 'Terms and Conditions - UTMBuilder.space';
$pDesc = 'UTM Builder is a tool to support marketing teams in building UTM tagging links for optimal analysis of performance.';


include ('../includes/header.php');
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=='true') {
    include ('../includes/dashboard/dashboard-common-head.php');
} else {
// simple header
?>

<?php
} ?>
<!-- Page Content -->
<div class="page-content">
    <!-- Topic -->
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body p-md-5">
            <!-- Topic header -->
            <h2 class="mb-2">UTMbuilder.Space Privacy Policy</h2>
            <div class="media align-items-center mt-4">
              <a class="avatar avatar-sm rounded-circle mr-3">
                <img alt="Image placeholder" src="<?php echo $site_URL; ?>assets/img/icons/space-icons/SVG/EDITABLE STROKES/45-astronaut-purple.svg">
              </a>
              <div class="media-body">
                <span class="h6 mb-0">UTMbuilders in Space</span>
                <span class="text-sm text-muted">Effective Date: 21 March 2021</span>
              </div>

            </div>
            <article class="mt-5">
                <p>This privacy policy (hereinafter "Privacy Policy") deals with the protection of Your privacy while You use Our website which is hereinafter referred to as "the Product" and which is located at: <span id="span_id_web_address">https://www.utmbuilder.space</span> </p>
                <p>The Product is owned and operated by: <span id="span_id_owner">UTMBuilder.space</span> <br><br>We are committed to the protection of Your privacy while You use the Product. <br><br>This Privacy Policy only applies to the Product. The Product may contain links to other websites or applications, but if that is the case, the Privacy Policy does not apply to any of those linked websites or applications.<br><br>We gather certain information from users of the Product, so this Privacy Policy explains what information we collect, how we use it, and your rights in relation to it. <br><br>By continuing to use the Product You acknowledge that You have had the chance to review and consider this Privacy Policy, and You acknowledge that You agree to it. This means that You also consent to the use of Your information and the method of disclosure as described in this Privacy Policy. If You do not understand the Privacy Policy or do not agree to it then please do not use the Product.</p>
                <h5>1. DEFINITIONS</strong></h5>
                <p><em>"Company IP"</em> includes, but is not limited to, the contents, layout, design, colours, appearance, graphics and imagery of the Website, Content and Materials as well as all copyrights, trademarks, trade secrets, patents and other intellectual property contained in the Product, Content and Materials.<br><br><em>"Content"</em> means any content, writing, images, audiovisual content or other information published on the Product.</p>
                <p><em>"Effective Date" </em>means the date that this Privacy Policy comes into force.<br><br><em>"Items" </em>means any and all of the Product, Services, Content and Materials collectively.<br><br><em>"Materials"</em> means any materials, information or documentation that We may provide to You in connection with Your use of the Services or Product including documentation, data, information developed by Us or owned by Us, and other materials which may assist in Your use of the Services or Product.</p>
                <p><em>"Parties"</em> means both You (the user of the Product) and Us (the owner of the Product) collectively.<br><br><em>"Personal Information" </em>means information that we obtain from You in connection with Your use of the Product.</p>
                <p><em>"Privacy Policy" </em>means this privacy policy.<em><br><br>"Product" </em>means the website including all pages, all sub pages, all blogs, all forums, all other connected pages and all other connected internet content whatsoever, the home page or main page of which is located at: <span id="span_id_web_address">https://www.utmbuilder.space</span> </p>
                <p><em>"Services"</em> means any or all services provided by or on the Product.</p>
                <p><em>"Third Party Links"</em> means links or references to websites other than the Website, to content other than the Content or to materials other than the Materials, none of which are controlled by Us. <br><br><em>"Us", "We", "Our"</em>  or "<em>the Owner"</em> refers to <span id="span_id_owner">UTMBuilder.space</span><br><br><em>"Us", "We", "Our"</em>  or "<em>the Owner"</em> also includes any employees, affiliates, agents or other representatives of <span id="span_id_owner">UTMBuilder.space</span><br><br><em>"You"</em> or <em>"Your" </em>refers to the user of the Website.<br><br><em>"Your Content" </em>means any Content posted to or added to the Website, Content or Materials by You or by somebody authorised by You or doing so on Your behalf.</p>
                <h5>2. INTERPRETATION</span></h5>
                <ol>
                    <li>In this Privacy Policy, unless the context otherwise requires, the following rules of interpretation shall apply:
                        <ol>
                            <li>Words referring to one gender include every other gender.</li>
                            <li>Words referring to a singular number include the plural, and words referring to a plural include the singular.</li>
                            <li>Words referring to a person or persons include companies, firms, corporations, organisations and vice versa.</li>
                            <li>Headings and titles are included in this Privacy Policy for convenience only and shall not affect the interpretation of this Privacy Policy.</li>
                            <li>Each Party must, at its own expense, take all reasonable steps and do all that is reasonably necessary to give full effect to this Privacy Policy and the events contemplated by it.</li>
                            <li>Any obligation on a Party not to do something includes an obligation not to allow that thing to be done.</li>
                        </ol>
                    </li>
                </ol>
                <h5>TYPE OF INFORMATION AND HOW IT IS COLLECTED</h5>
                <ol>
                    <li>When You use the Product, We may collect information from You through automatic tracking systems (such as information about your browsing preferences).</li>
                    <li>In addition, We may collect information that You volunteer to Us (such as information that You provide during a sign up process or at other times while using the Product).</li>
                    <li>In order to access all of the features of the Product, You are required to register as a user. During the registration process, We collect some of Your Personal Information, in the following manner:
                        <ol>
                            <li>We will not collect information that identifies You personally, except when You specifically volunteer that information to Us.</li>
                            <li> The information that We will collect from You at registration includes:<br/>
                            <span id="span_id_registration">Email address, Company name, First Name, Last Name</li>
                            <li> By undergoing the registration process You consent to Us collecting Your Personal Information, including the Personal Information described in this clause. You also consent to Us collecting any other Personal Information as well as storing, using or disclosing Your Personal Information in accordance with this Privacy Policy.</li>
                        </ol>
                    </li>
                    <li>In order to access some specific features of the Product, You are required to provide some Personal Information. During this process, We collect some of Your Personal Information, in the following manner:
                        <ol>
                            <li>We will not collect information that identifies You personally, except when You specifically volunteer that information to Us when using specific Product features. These specific Product features might include, but are not limited to:
                            <ol>
                                <li>A. making purchases  </li>
                                <li>B. receiving general emails from Us </li>
                                <li>Participating in surveys</span></li>
                            </ol>
                            </li>
                            <li> In addition to any Personal Information that You are required to provide in order to access these additional Product features, in some cases You may be required to provide more specific information. For example, in order to make purchases, You may need to provide credit card information, billing information and postal addresses.</li>
                        </ol>
                    <li> From time to time We may request information from You to assist Us in improving Our Product, Services, Content or Materials. For example, We may ask You to answer some questions about Your demographics, Your shopping preferences, or Your other preferences in relation to the Product.</li>
                </ol>
                <h5>4. COOKIES</h5>
                <ol>
                    <li> Cookies are small files stored on Your computer or mobile device which collect information about Your browsing behaviour.</li>
                    <li>Cookies do not access information which is stored on Your computer.</li>
                    <li> Cookies enable us to tailor our configurations to Your needs and preferences, in order to improve Your user experience.</li>
                    <li>Most internet browsers accept cookies automatically, although You are able to change Your browser settings to control cookies, including whether or not You accept them, and how to remove them. You may also be able to set Your browser to advise You if You receive a cookie, or to block or delete cookies. However, if You do this, You may be prevented from taking full advantage of the Product.  </li>
                </ol>
                <h5>5. HOW YOUR INFORMATION IS STORED</h5>
                <ol>
                <p style="padding-left: 30px;">a. Please note that no systems involving the transmission of information via the internet, or the electronic storage of data, are completely secure. However, we take the protection and storage of Your Personal Information very seriously. We take all reasonable steps to protect Your Personal Information.</p>
                <p style="padding-left: 30px;">b. We use appropriate physical, digital, managerial and security systems to store Your Personal Information and to protect it against unauthorised access, destruction or disclosure.     </p>
                </ol>
                <h5>6. COMBINING INFORMATION</h5>
                <ol>
                    <li>a. We do not combine, link or aggregate any of Your Personal Information with other Personal Information of Yours which We are holding.</li>
                </ol>
                <h5>7. HOW YOUR INFORMATION IS USED</h5>
                <ol>
                    <li>We use Your Personal Information to help us improve your experience with Our Product. We may use Your Personal Information for purposes including but not limited to:
                        <ol>
                            <li>order fulfilment.</li>
                            <li>providing customer service to You. </li>
                            <li>advising You about updates to the Product or related Items.  </li>
                        </ol>
                    </li>
                </ol>
                <h5>8. MERGER, RESTRUCTURE OR SALE OF OUR BUSINESS</h5>
                <ol>
                    <li>Part or all of Our business may be merged, restructured or sold including but not limited to through an ordinary sale of business or of stock, a corporate reorganisation, a change in control, bankruptcy or insolvency proceedings. </li>
                    <li>In the event that such a merger, restructure or sale occurs as described in the preceding sub-clause hereof, We may transfer Your Personal Information, including personally identifiable information, as part of that merger, restructure or sale. </li>
                </ol>
                <h5>9. EMAIL OPT IN/OUT</h5>
                <ol>
                    <li>If You receive an email from Us in relation to the Product and would prefer not to receive such correspondence in the future, You may follow the instructions in the email to opt out of future correspondence. You may also contact Us, using the details at the bottom of this Privacy Policy, in order to opt out of future correspondence. We will make all reasonable efforts to promptly comply with Your requests. However, You may receive subsequent correspondence from Us while Your request is being handled. </li>
                </ol>
                <h5>10. ACCESSING, UPDATING AND CORRECTING YOUR PERSONAL INFORMATION</h5>
                <ol>
                    <li>You have the right to request access to any of Your Personal Information which We are holding.</li>
                    <li>You have the right to request that any of Your Personal Information which We are holding be updated or corrected.</li>
                    <li>In order to request access, an update or a correction to Your Personal Information, you may contact us using the details at the end of this Privacy Policy. </li>
                </ol>
                <h5>11. CHANGES TO THIS POLICY</h5>
                <ol>
                    <li>We may make changes to this Privacy Policy at any time in Our sole discretion. </li>
                    <li>If We make changes to this Privacy Policy, unless We obtain Your express consent to those changes, then such changes will only apply to any information that We obtain from You after the date that the changes take effect. </li>
                    <li>If We make changes to this Privacy Policy, Your continued use of the Product after the date that the changes take effect confirms that You acknowledge, accept and agree to those changes.</li  >
                </ol>
                <h5>12. COMPLAINTS</h5>
                <ol>
                    <li>We take customer satisfaction very seriously. If You have a complaint in relation to Our handling of Your Personal Information, We will endeavour to handle it promptly and fairly. For Your information, an overview of Our complaints handling procedure is as follows:
                        <ol>
                            <li>Any complaints are forwarded to Our complaints officer for review. We aim to review all complaints within 7 days of receiving them (although this cannot be guaranteed). If necessary, the complaints officer may then refer the complaint to another section within Our organisation for consideration. If further information is required, We may contact You to request that information. If We accept fault in relation to the complaint then We will propose a resolution (which may or may not be the same as any resolution proposed by You). If We do not accept fault, then We will contact You to advise You of this. We aim to complete this entire process within 21 days, provided that We are provided complete information in the first place (although this cannot be guaranteed). However, if You do not provide complete information then this is likely to delay the handling of Your complaint. </p>
                            <li>If You have a complaint in relation to Our handling of Your Personal Information, You should use the following procedure to lodge Your complaint with Us:<br>
                            <span id="span_id_lodge_complaints">Please email us at <a href="mailto:utmbuilderspace@gmail.com">utmbuilderspace@gmail.com</a> if you have any complaints or queries and we will respond within 7 days.</span></li>
                            <li>If You are not satisfied with Our response to Your complaint, You may refer your complaint to the relevant external dispute resolution organisation in Your area.</li>
                        </ol>
                    </li>
                </ol>
                <h5>13. CONTACT US</h5>
                <ol>
                    <li>You can contact Us about this Privacy Policy using the following details:<br>
                    <span id="span_id_contact">Storm Jarvie<br>e: <a href="mailto:utmbuilderspace@gmail.com">utmbuilderspace@gmail.com</a></span></li>					</div>
                </ol>
            </article>
          <div class="card-footer px-md-5 py-4 bg-lighter border-0 delimiter-top">
              <h5 class="h6 mb-4">Did you find this article helpful?</h5>
              <form class="d-flex justify-content-between">
                <div>
                  <button class="btn btn-xs btn-secondary" type="submit"><i class="fas fa-thumbs-up"></i>
                  </button>
                  <button class="btn btn-xs btn-secondary" type="submit"><i class="fas fa-thumbs-down"></i>
                  </button>
                </div>
                <div>
                  <a href="mailto:utmbuilderspace@gmail.com" class="btn btn-xs btn-secondary rounded-pill">Contact Support</a>
                </div>
              </form>
           </div>
        </div>
      </div>
    </div>
</div>



<?php
include ('../includes/dashboard/dashboard-common-foot.php');
include ('../includes/footer.php'); ?>
?>