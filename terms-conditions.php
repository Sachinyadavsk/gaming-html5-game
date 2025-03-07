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
    $game_res4=mysqli_query($con,"select * from meta_data where page='terms conditions'");
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
                                 Terms & Conditions
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
                                      <h1>Terms & Conditions</h1>
                                   </div>
                                 <div class="details__content">
                                    <p>Welcome to zettagame.com ("the Website"). These  <a href="https://zettagame.com/about-us" style="color:blue">Terms and Conditions</a> apply to all access and use of the Website ("Terms"). Please read them carefully before proceeding. This Website should not be used by those who do not agree with these Terms.
                                    </p>
                                    <h3 class="fw-6">1. Acceptance of Terms</h3>
                                    <p>By creating an account, accessing, or using any part of the Website, you confirm that:</p>
                                    <ul>
                                        <li>(1) You are at least 18 years old or have parental/guardian consent to use the Website.</li>
                                        <li>(2) You have the legal capacity to enter into this agreement.</li>
                                        <li>(3) You will comply with all applicable laws and regulations when using the Website</li>
                                    </ul>
                                    
                                  
                                     <h3 class="fw-6 mt-2">2. Description of Services</h3>
                                     <p>The Website provides users with access to gaming services, rewards, and related content. Specific terms may apply to individual games or promotions,
                                     and you agree to abide by those additional rules when participating.</p>
                                     
                                     <h3 class="fw-6 mt-2">3. User Accounts</h3>
                                     <ul>
                                        <li>(1) To access certain features, you may be required to register for an account.</li>
                                        <li>(2) You are responsible for maintaining the confidentiality of your login credentials and for all activities that occur under your account.</li>
                                        <li>(3) The Website reserves the right to suspend or terminate accounts that violate these Terms or engage in fraudulent or abusive activities.</li>
                                    </ul>
                                    
                                     <h3 class="fw-6 mt-2">4. Earning and Redeeming Rewards</h3>
                                    <ul>
                                        <li>(1) Users may earn rewards (e.g., points, tokens, or credits) by participating in activities on the Website.</li>
                                        <li>(2) Rewards cannot be transferred, sold, or exchanged for cash unless explicitly stated.</li>
                                        <li>(3) The Website reserves the right to modify or discontinue reward programs at any time without prior notice</li>
                                    </ul>
                                    
                                    <h3 class="fw-6 mt-2">5. Prohibited Activities</h3>
                                    <p>You agree not to:</p>
                                     <ul>
                                        <li>(1) Use the Website for any unlawful or unauthorized purpose.</li>
                                        <li>(2) Engage in cheating, hacking, or other manipulative activities that undermine the integrity of the platform.</li>
                                        <li>(3) Submit false or misleading information when registering or participating in activities.</li>
                                        <li>(4) Attempt to disrupt the Website's functionality, including introducing malware, exploiting vulnerabilities, or overloading servers.</li>
                                    </ul>
                                    
                                    <h3 class="fw-6 mt-2">6. Intellectual Property</h3>
                                     <ul>
                                        <li>(1) All content, including but not limited to text, graphics, logos, and software, is the property of zettagame.com or its licensors.</li>
                                        <li>(2) Users are granted a limited, non-exclusive, non-transferable license to access and use the Website for personal purposes only.</li>
                                        <li>(3) Any unauthorized use, reproduction, or distribution of content is strictly prohibited.</li>
                                    </ul>
                                    
                                    <h3 class="fw-6 mt-2">7. Disclaimer of Warranties</h3>
                                    <p>The Website and its services are provided "as is" and "as available" without any warranties of any kind, either express or implied.</p>
                                     <ul>
                                        <li>(1) The Website does not guarantee uninterrupted or error-free operation.</li>
                                        <li>(2) The Website is not responsible for any loss of data, rewards, or other damages resulting from technical issues or user error.</li>
                                    </ul>
                                    
                                     <h3 class="fw-6 mt-2">8. Limitation of Liability</h3>
                                     <p>To the maximum extent permitted by law, zettagame.com and its affiliates are not liable for any indirect, incidental, special, or consequential damages arising from:</p>
                                      <ul>
                                        <li>(1) Your use or inability to use the Website.</li>
                                        <li>(2) Unauthorized access to your account or data.</li>
                                        <li>(3) Errors, bugs, or downtime on the Website..</li>
                                    </ul>
                                    
                                     <h3 class="fw-6 mt-2">9. Modification of Terms</h3>
                                     <p>The Website reserves the right to modify these Terms at any time. Changes will take effect upon being posted on this page. It is your responsibility to review these Terms periodically for updates.</p>
                                    
                                     <h3 class="fw-6">10. Termination</h3>
                                     <p>The Website reserves the right to suspend or terminate your access at its sole discretion, with or without notice, for violations of these Terms or any other reason deemed necessary.</p>
                                     
                                      <h3 class="fw-6">11. Governing Law</h3>
                                      <p>These Terms and any disputes arising from your use of the Website are governed by the laws of without regard to conflict of laws principles..</p>
                                      
                                       <h3 class="fw-6">12. Contact Us</h3>
                                     <p>If you have any questions about these Terms, please contact us at:</p>
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