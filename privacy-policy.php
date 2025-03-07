<!DOCTYPE html>
<html lang="en">
<head>
<!-- required meta -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- #favicon -->
<link rel="shortcut icon" href="https://zettagame.com/assets/images/favicon.png" type="image/x-icon">
<meta name="author" content="https://zettagame.com/" />
  <?php           
  include('confige.php');
    $game_res4=mysqli_query($con,"select * from meta_data where page='privacy policy'");
    $game_arr4=array();
    while($row4=mysqli_fetch_assoc($game_res4)){
      $game_arr4[]=$row4;    
    }
     foreach($game_arr4 as $list){
         echo htmlspecialchars_decode($list['data']);
    }?>
<?php include('headerurl.php');?>
   <body>
      <div class="nftg-app a-cursor ">
             <?php include('header.php');?>
            <!-- ==== / header end ==== -->
            <!-- ==== main content start ==== -->
            <main class="nftg-content">
               <!-- ==== breadcrumb start ==== -->
               <div class="breadcrumb-wrapper">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-12">
                           <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                 <li class="breadcrumb-item">
                                    <a href="https://zettagame.com/home">Home</a>
                                 </li>
                                 <li class="breadcrumb-item active" aria-current="page">
                                 Privacy Policy
                                 </li>
                              </ol>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- ==== / breadcrumb end ==== -->
               <!-- ==== blog section start ==== -->
               <section class="pt-120 pb-120 blog-area fade-wrapper">
                  <div class="container-fluid">
                     <div class="row vertical-column-gap-lg">
                        <div class="col-12 col-xl-12">
                           <div class="blog-area__content">
                              <div class="blog-details">
                                   <div class="text-center mb-50">
                                      <h1>Privacy Policy</h1>
                                   </div>
                                 <div class="details__content">
                                    <p>At game zettagame, we are committed to<a href="https://zettagame.com/terms-conditions" style="color:blue">protecting</a> protecting your privacy and ensuring your personal information is handled securely. This Privacy Policy outlines how we collect, use, and safeguard your data when you interact with our website, services, or features.
                                    </p>
                                    <h3 class="fw-6">1. Information We Collect</h3>
                                    <p>We collect the following types of information when you use our website:</p>
                                    <p><b>a. Personal Information</b></p>
                                    <ul>
                                        <li>(1) Creating an account or subscribing to our services requires your name, email address, and contact information.</li>
                                        <li>(2) Payment information when purchasing in-game items or subscriptions (processed securely through third-party providers).</li>
                                    </ul>
                                    <p><b>b. Non-Personal Information</b></p>
                                    <ul>
                                        <li>(1) Device type, browser, IP address, and usage data (e.g., pages visited, time spent on the website).</li>
                                        <li>(2) Cookies and tracking technologies for performance analysis and personalized content.</li>
                                    </ul>
                                    <p><b>c. Gaming Data</b></p>
                                    <ul>
                                        <li>(1) In-game activity, leaderboard stats, preferences, and achievements to enhance your gaming experience.</li>
                                    </ul>
                                     <h3 class="fw-6 mt-2">2. How We Use Your Information</h3>
                                     <p>We use your information to:</p>
                                     <ul>
                                        <li>(1) Provide, operate, and improve our gaming services.</li>
                                        <li>(2) Process transactions and manage your account..</li>
                                        <li>(3) Personalize in-game content and recommendations.</li>
                                        <li>(4) Communicate updates, promotions, and customer support.</li>
                                    </ul>
                                     <h3 class="fw-6 mt-2">3. Cookies and Tracking Technologies</h3>
                                      <ul>
                                        <li>(1) Enhance website performance and functionality.</li>
                                        <li>(2) Analyze user behavior to improve gaming features.</li>
                                        <li>(3) Deliver targeted ads and promotions.</li>
                                    </ul>
                                     <h3 class="fw-6 mt-2">4. Sharing Your Information</h3>
                                     <p>The information you provide to us will never be sold to a third party. However, we may share data with:</p>
                                     <ul>
                                        <li><b>(1) Service Providers:</b> For payment processing, analytics, or customer support.</li>
                                        <li><b>(2) Advertising Partners:</b> To deliver personalized ads (based on non-personal data).</li>
                                        <li><b>(3) Legal Authorities:</b> If required to comply with laws or protect our rights</li>
                                    </ul>
                                     <h3 class="fw-6 mt-2">5. Data Security</h3>
                                     <p>Security measures that we implement to protect your data include encryption, firewalls, and periodic security audits.
                                     However, no system is completely secure, and we encourage you to safeguard your account credentials.</p>
                                      <h3 class="fw-6">6. Your Rights</h3>
                                     <p>You have the right to:</p>
                                    <ul>
                                        <li>(1) Access, update, or delete your personal data.</li>
                                        <li>(2) Opt-out of marketing communications.</li>
                                        <li>(3) Disable targeted advertising via cookie settings or third-party platforms.</li>
                                    </ul>
                                    <p>For data requests or questions, contact us at <a href="mailto:info@zettamobi.com">info@zettamobi.com</a></p>
                                    <h3 class="fw-6">7. Children’s Privacy</h3>
                                    <p>We do not knowingly collect personal information from children. If we discover such data, it will be deleted immediately.</p>
                                     <h3 class="fw-6">8. Third-Party Links</h3>
                                     <p>Our website may contain links to third-party websites. We are not responsible for their privacy practices, so we encourage you to review their privacy policies before sharing any data.</p>
                                      <h3 class="fw-6">9. Changes to This Privacy Policy</h3>
                                      <p>We may update this Privacy Policy periodically. A change in this page will be accompanied by an updated "Last Modified" date.</p>
                                       <h3 class="fw-6">10. Contact Us</h3>
                                     <p>If you have questions or concerns about this Privacy Policy, please reach out to us:</p>
                                    <ul>
                                        <li>(1) Email: <a href="mailto:info@zettamobi.com">info@zettamobi.com</a></li>
                                        <li>(2) Address: Sector 63, Noida, Uttar Pradesh 201301</li>
                                    </ul>
                                 </div>
                              </div>
                             
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- ==== / blog section end ==== -->
            </main>
            <!-- ==== / main content end ==== -->
            <!-- ==== footer start ==== -->
            <?php include('footer.php');?>
            <!-- ==== / footer end ==== -->
         </div>
         <?php include('footerurl.php');?>