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
                                    <p>Welcome to Zettagame.<a href="https://zettagame.com/terms-conditions" style="color:blue"> Your privateness is critical to us</a> This Privacy Policy explains how we gather, use, expose, and shield your non-public records while you use our net internet site on line, packages, and offerings (together called the "Services").
                                    </p>
                                    <h3 class="fw-6">Information We Collect</h3>
                                    <p>We acquire the following forms of records:</p>
                                    <ul>
                                        <li>(1) <b>Personal Information:</b> Name, email deal with, phone variety, and a few one of a kind info you provide.</li>
                                        <li>(2) <b>Usage Data:</b> Information about the manner you have interaction with our Services, along side IP deal with, browser kind, device records, and cookies.</li>
                                        <li>(3) <b>Payment Information:</b> If applicable, we can also accumulate fee data to way transactions securely.</li>
                                    </ul>
                                   
                                     <h3 class="fw-6 mt-2">How We Use Your Information</h3>
                                     <p>We use your statistics for the following features:</p>
                                     <ul>
                                        <li>(1) To provide, beautify, and customise our Services.</li>
                                        <li>(2) To communicate with you, which encompass customer support and updates.</li>
                                        <li>(3) To method transactions securely.</li>
                                        <li>(4) To have a look at jail obligations and prevent fraud.</li>
                                    </ul>
                                     <h3 class="fw-6 mt-2">How We Share Your Information</h3>
                                     <p>We do now not promote your private statistics. However, we might also percentage your records with:</p>
                                      <ul>
                                        <li>(1) Service Providers: Third activities that help us perform our corporation, alongside aspect net web hosting, analytics, and rate processing.</li>
                                        <li>(2) Legal Authorities: If required thru regulation, we may also additionally reveal data to government organizations.</li>
                                        <li>(3) Business Transfers: In case of a merger, sale, or acquisition, your records can be transferred to the present day entity.</li>
                                    </ul>
                                     <h3 class="fw-6 mt-2">Cookies and Tracking Technologies</h3>
                                     <p>We use cookies and comparable technologies to beautify your enjoy, check utilization, and provide customized content fabric. You can manipulate cookie alternatives via your browser settings.</p>
                                     <h3 class="fw-6 mt-2">Data Security</h3>
                                     <p>We take affordable measures to defend your statistics from unauthorized get entry to, loss, or misuse. However, no device is without a doubt strong, so we can not guarantee absolute security.</p>
                                      <h3 class="fw-6">Your Rights and Choices</h3>
                                     <p>Depending to your vicinity, you could have the right to:</p>
                                    <ul>
                                        <li>(1) Access, accurate, or delete your non-public statistics.</li>
                                        <li>(2) Opt out of marketing and advertising communications.</li>
                                        <li>(3) Restrict processing or request records portability.</li>
                                        <li>(4) To exercise the ones rights, please contact us at info@zettamobi.com .</li>
                                    </ul>
                                    
                                    <h3 class="fw-6">Third-Party Links</h3>
                                    <p>Our Services also can furthermore encompass links to 0.33-birthday party web net sites. We are not accountable for their privacy practices and inspire you to test their guidelines.</p>
                                     <h3 class="fw-6">Children’s Privacy</h3>
                                     <p>Our Services are not intended for children under thirteen. We do no longer knowingly accumulate information from minors.</p>
                                      <h3 class="fw-6">Changes to This Privacy Policy</h3>
                                      <p>We may also additionally update this Privacy Policy every now and then. Any changes can be published with the up to date powerful date.</p>
                                       <h3 class="fw-6">Contact Us</h3>
                                     <p>If you have got got any questions on this Privacy Policy, please contact us at:</p>
                                    <ul>
                                        <li>(1) Email: <a href="mailto:info@zettamobi.com">info@zettamobi.com</a></li>
                                        <li>(2) Address: Sector 63, Noida, Uttar Pradesh 201301</li>
                                        <li>(3) Thank you for trusting Zettagame!</li>
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