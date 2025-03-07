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
    $game_res4=mysqli_query($con,"select * from meta_data where page='disclaimer'");
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
                                 Disclaimer
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
                                      <h1>Disclaimer</h1>
                                   </div>
                                 <div class="details__content">
                                    <p>Welcome to <a href="https://zettagame.com/" style="color:blue">zettagame.com</a> By accessing and using this Website, you agree to the terms outlined in this Disclaimer. If you do not agree, please discontinue use of the Website immediately.</p>
                                    
                                    <h3 class="fw-6">General Information</h3>
                                    <p>The information provided on this Website is for general informational and entertainment purposes only. While we strive to keep the content accurate and up-to-date, we make no guarantees regarding the completeness,
                                    reliability, or accuracy of the information displayed. Use of any information or materials from this Website is entirely at your own risk.</p>
                                    <p><b>Gaming and Rewards</b></p>
                                    <ul>
                                        <li><b>(1) Earnings and Rewards Disclaimer:</b><br>Any rewards, points, or other benefits earned through the games or services on this Website are subject to specific terms and conditions. Participation does not guarantee earnings or winnings, and outcomes may vary based on user performance, engagement, or other factors.</li>
                                        <li class="mt-2"><b>(2) Fair Use and Compliance:</b><br>All users must ensure compliance with applicable laws and regulations in their respective jurisdictions when using the Website. The Website is not responsible for any legal issues that may arise due to a user’s failure to comply with such laws.</li>
                                    </ul>
                                    
                                     <h3 class="fw-6 mt-2">Third-Party Links and Services</h3>
                                     <p>The Website may contain links to third-party websites or services for user convenience. We have no control over the content, nature, or availability of these external sites and do not endorse or assume responsibility for them. Accessing such links is at your own discretion and risk.</p>
                                     
                                     <h3 class="fw-6 mt-2">Limitation of Liability</h3>
                                     <p>To the fullest extent permitted by law,  <a href="https://zettagame.com/" style="color:blue">zettagame.com</a> disclaims all liability for any losses, damages, or expenses incurred by users as a result of:</p>
                                     <ul>
                                        <li>(1) Participation in games or activities on the Website.</li>
                                        <li>(2) Inaccuracies or omissions in Website content.</li>
                                        <li>(3) Technical issues, such as downtime, interruptions, or errors.</li>
                                    </ul>
                                    
                                     <h3 class="fw-6 mt-2">No Professional Advice</h3>
                                   <p>The information provided on this Website does not constitute legal, financial, or professional advice. Users should seek appropriate counsel or guidance for specific concerns or questions.</p>
                                    
                                    <h3 class="fw-6 mt-2">Updates and Changes</h3>
                                    <p>We reserve the right to update or modify this Disclaimer at any time without prior notice. It is the user’s responsibility to review this page periodically for changes. Continued use of the Website constitutes acceptance of any updated terms.</p>
                                     
                                      
                                       <h3 class="fw-6">Contact Us</h3>
                                     <p>If you have any questions or concerns about this Disclaimer, feel free to contact us at:</p>
                                    <ul>
                                        <li>(1) Email: <a href="mailto:info@zettamobi.com" style="color:blue">info@zettamobi.com</a></li>
                                        <li>(2) Address: Sector 63, Noida, Uttar Pradesh 201301</li>
                                    </ul>
                                    <p>By using <a href="https://zettagame.com/">zettagame.com</a> you acknowledge and agree to this Disclaimer. Thank you for understanding and using our services responsibly!</p>
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